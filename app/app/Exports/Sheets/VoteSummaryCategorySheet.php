<?php

namespace App\Exports\Sheets;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class VoteSummaryCategorySheet implements FromCollection, WithHeadings, WithMapping, WithStyles, WithTitle
{
    protected $rows;

    public function __construct(Collection $rows)
    {
        $this->rows = $rows;
    }

    public function collection()
    {
        return $this->rows;
    }

    public function headings(): array
    {
        return ['Category', 'Sectors', 'Awards', 'Public Votes', "Judges' Votes"];
    }

    public function map($row): array
    {
        return [
            $row['name'],
            $row['sectors'],
            $row['awards'],
            $row['public_votes'],
            $row['judges_votes'],
        ];
    }

    public function title(): string
    {
        return 'Category Breakdown';
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
