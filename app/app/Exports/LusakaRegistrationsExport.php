<?php

namespace App\Exports;

use App\Models\LusakaSummitRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LusakaRegistrationsExport implements FromCollection, WithHeadings, WithMapping, WithStyles
{
    protected $status;

    public function __construct($status = 'all')
    {
        $this->status = $status;
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        $query = LusakaSummitRegistration::orderBy('created_at', 'desc');

        if ($this->status && $this->status !== 'all') {
            $query->where('payment_status', $this->status);
        }

        return $query->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Registration ID',
            'Ticket Number',
            'Name',
            'Email',
            'Phone',
            'Organization',
            'Attendance Option',
            'Delegate Count',
            'Amount',
            'Currency',
            'Payment Status',
            'Stripe Session ID',
            'Registration Date',
        ];
    }

    /**
     * @param mixed $registration
     * @return array
     */
    public function map($registration): array
    {
        return [
            $registration->registration_id,
            $registration->ticket_number ?? 'N/A',
            $registration->name,
            $registration->email,
            $registration->phone ?? 'N/A',
            $registration->organization ?? 'N/A',
            $registration->attendance_option,
            $registration->delegate_count,
            $registration->amount,
            $registration->currency,
            strtoupper($registration->payment_status),
            $registration->stripe_session_id ?? 'N/A',
            $registration->created_at->format('Y-m-d H:i:s'),
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
