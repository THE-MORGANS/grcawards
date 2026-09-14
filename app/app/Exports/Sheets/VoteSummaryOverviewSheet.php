<?php

namespace App\Exports\Sheets;

use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class VoteSummaryOverviewSheet implements FromArray, WithHeadings, WithStyles, WithTitle
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function array(): array
    {
        $d = $this->data;
        $judgingCoverage = $d['awardsCount'] > 0 ? round(($d['awardsJudged'] / $d['awardsCount']) * 100, 1) : 0;
        $voterTurnout = $d['votersCount'] > 0 ? round(($d['votersWhoVoted'] / $d['votersCount']) * 100, 1) : 0;

        return [
            ['Award Program', $d['awardProgram']->name ?? 'N/A'],
            ['Year', $d['awardProgram']->year ?? 'N/A'],
            ['Report Generated', now()->format('d M Y, h:i A')],
            [''],
            ['Metric', 'Value'],
            ['Nominees', $d['nomineesCount']],
            ['Registered Voters', $d['votersCount']],
            ['Voters Who Cast a Vote', $d['votersWhoVoted']],
            ['Voter Turnout (%)', $voterTurnout],
            ['Public Votes Cast', $d['publicVotesCount']],
            ['Judges Active on This Program', $d['judgesCount']],
            ['Judge Accounts System-Wide', $d['totalJudgeAccounts']],
            ["Judges' Votes (Score Entries)", $d['judgesVotesCount']],
            ['Awards With At Least One Judge Score', $d['awardsJudged']],
            ['Judging Coverage (%)', $judgingCoverage],
            ['Categories', $d['categoriesCount']],
            ['Sectors', $d['sectorsCount']],
            ['Awards', $d['awardsCount']],
            [''],
            ['Scoring Formula', "Overall Score = (Judges' Average / 10 x 75%) + (Public Vote Share x 25%)"],
        ];
    }

    public function headings(): array
    {
        return ['Vote Summary Overview', ''];
    }

    public function title(): string
    {
        return 'Overview';
    }

    public function styles(Worksheet $sheet)
    {
        $sheet->getColumnDimension('A')->setWidth(32);
        $sheet->getColumnDimension('B')->setWidth(45);

        return [
            1 => ['font' => ['bold' => true, 'size' => 14]],
            5 => ['font' => ['bold' => true]],
        ];
    }
}
