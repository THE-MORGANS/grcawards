<?php

namespace App\Exports;

use App\Exports\Sheets\VoteSummaryCategorySheet;
use App\Exports\Sheets\VoteSummaryOverviewSheet;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class VoteSummaryExport implements WithMultipleSheets
{
    protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function sheets(): array
    {
        return [
            new VoteSummaryOverviewSheet($this->data),
            new VoteSummaryCategorySheet($this->data['categoryBreakdown']),
        ];
    }
}
