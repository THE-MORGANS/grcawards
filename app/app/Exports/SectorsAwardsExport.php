<?php

namespace App\Exports;

use App\Models\Category;
use App\Models\Nominee;
use App\Models\Sector;
use App\Models\Vote;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Vinkla\Hashids\Facades\Hashids;

class SectorsAwardsExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    protected $awardProgramId;
    protected $categoryId;

    public function __construct($awardProgramId, $categoryId)
    {
        $this->awardProgramId = Hashids::connection('awardProgram')->decode($awardProgramId)[0];
        $this->categoryId = Hashids::connection('category')->decode($categoryId)[0];
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $category = Category::find($this->categoryId);
        $sectors = Sector::where([
            ['award_program_id', '=', $this->awardProgramId],
            ['category_id', '=', $this->categoryId],
        ])->get();
        $nominees = Nominee::where('award_program_id', $this->awardProgramId)->get();

        $awardIds = $sectors->flatMap(function ($sector) {
            return $sector->awards->pluck('id');
        });

        $voteCounts = Vote::whereIn('award_id', $awardIds)
            ->select('award_id', 'nominee_id', DB::raw('count(*) as total'))
            ->groupBy('award_id', 'nominee_id')
            ->get();

        $bigVotes = [];
        foreach ($voteCounts as $vc) {
            $bigVotes[$vc->nominee_id][$vc->award_id] = $vc->total;
        }

        $rows = collect();

        foreach ($sectors as $sector) {
            foreach ($sector->awards as $award) {
                $awardNominees = $nominees->filter(function ($nominee) use ($award) {
                    return in_array($award->id, json_decode($nominee->award_ids) ?? [])
                        && $award->sector_id == $nominee->sector_id;
                })->sortByDesc(function ($nominee) use ($award, $bigVotes) {
                    return $bigVotes[$nominee->id][$award->id] ?? 0;
                })->values();

                $awardTotal = $awardNominees->sum(function ($nominee) use ($award, $bigVotes) {
                    return $bigVotes[$nominee->id][$award->id] ?? 0;
                });

                if ($awardNominees->isEmpty()) {
                    $rows->push([
                        'category' => $category->name,
                        'sector' => $sector->name,
                        'award' => $award->name,
                        'rank' => null,
                        'nominee' => null,
                        'votes' => null,
                        'percentage' => null,
                    ]);
                    continue;
                }

                foreach ($awardNominees as $index => $nominee) {
                    $voteCount = $bigVotes[$nominee->id][$award->id] ?? 0;
                    $rows->push([
                        'category' => $category->name,
                        'sector' => $sector->name,
                        'award' => $award->name,
                        'rank' => $index + 1,
                        'nominee' => $nominee->name,
                        'votes' => $voteCount,
                        'percentage' => $awardTotal > 0 ? round(($voteCount / $awardTotal) * 100, 2) : 0,
                    ]);
                }
            }
        }

        return $rows;
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Category',
            'Sector',
            'Award',
            'Rank',
            'Nominee',
            'Votes',
            'Vote Share (%)',
        ];
    }

    /**
     * @param array $row
     * @return array
     */
    public function map($row): array
    {
        return [
            $row['category'],
            $row['sector'],
            $row['award'],
            $row['rank'] ?? 'N/A',
            $row['nominee'] ?? 'No nominees in this award yet',
            $row['votes'] ?? 'N/A',
            $row['percentage'] !== null ? $row['percentage'] . '%' : 'N/A',
        ];
    }

    /**
     * @param Worksheet $sheet
     * @return array
     */
    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
