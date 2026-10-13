<?php

namespace App\Exports;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use Maatwebsite\Excel\Concerns\WithTitle;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class TicketSalesExport implements FromCollection, WithHeadings, WithMapping, WithStyles, WithTitle
{
    protected $registrations;

    public function __construct(Collection $registrations)
    {
        $this->registrations = $registrations;
    }

    public function collection()
    {
        return $this->registrations;
    }

    public function headings(): array
    {
        return [
            'Registration ID', 'Name', 'Email', 'Phone', 'Organization', 'Ticket Type',
            'Quantity', 'Amount', 'Currency', 'Status', 'Region', 'Ticket Number',
            'Seat Numbers', 'Purchased At',
        ];
    }

    public function map($registration): array
    {
        return [
            $registration->registration_id,
            $registration->name,
            $registration->email,
            $registration->phone,
            $registration->organization,
            $registration->ticket_name,
            $registration->quantity,
            $registration->amount,
            strtoupper($registration->currency),
            ucfirst($registration->payment_status),
            ucfirst($registration->region),
            $registration->ticket_number,
            $registration->seat_numbers ? implode(', ', $registration->seat_numbers) : '',
            $registration->created_at->format('d M Y, h:i A'),
        ];
    }

    public function title(): string
    {
        return 'Ticket Sales';
    }

    public function styles(Worksheet $sheet)
    {
        return [
            1 => ['font' => ['bold' => true]],
        ];
    }
}
