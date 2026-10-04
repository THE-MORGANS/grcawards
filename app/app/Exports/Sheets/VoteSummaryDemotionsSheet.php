<?php

namespace App\Exports\Sheets;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class VoteSummaryDemotionsSheet implements FromCollection, WithHeadings, WithMapping, WithStyles, WithTitle
{
    protected $demotions;

    public function __construct(Collection $demotions)
    {
        $this->demotions = $demotions;
    }

    public function collection()
    {
        return $this->demotions;
    }

    public function headings(): array
    {
        return ['Nominee', 'Award', 'Reason', 'Demoted By', 'Date'];
    }

    public function map($demotion): array
    {
        return [
            optional($demotion->nominee)->name ?? 'Unknown nominee',
            optional($demotion->award)->name ?? 'N/A',
            $demotion->reason,
            optional($demotion->admin)->fullname ?? 'an admin',
            $demotion->created_at->format('d M Y, h:i A'),
        ];
    }

    public function title(): string
    {
        return 'Demotions';
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getColumnDimension('C')->setWidth(50);

        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
