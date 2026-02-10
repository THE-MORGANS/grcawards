<?php

namespace App\Exports;

use App\Models\LusakaSummitRegistration;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class LusakaAttendanceExport implements FromCollection, WithHeadings, WithMapping, WithStyles
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
        $registrations = LusakaSummitRegistration::orderBy('created_at', 'desc')->get();
        $allDelegates = [];

        foreach ($registrations as $reg) {
            $delegates = $reg->delegates_data ?? [];
            foreach ($delegates as $index => $delegate) {
                $attended = $delegate['attended'] ?? false;
                
                // Filter by status
                if ($this->status === 'attended' && !$attended) continue;
                if ($this->status === 'not-attended' && $attended) continue;

                // Prepare for export row
                $allDelegates[] = (object)[
                    'name' => $delegate['name'] ?? 'N/A',
                    'email' => $delegate['email'] ?? 'N/A',
                    'phone' => $delegate['phone'] ?? 'N/A',
                    'organization' => $delegate['organization'] ?? 'N/A',
                    'jobTitle' => $delegate['jobTitle'] ?? 'N/A',
                    'reg_id' => $reg->registration_id,
                    'registrant' => $reg->name,
                    'attended' => $attended ? 'YES' : 'NO',
                    'reg_date' => $reg->created_at->format('Y-m-d H:i')
                ];
            }
        }

        return collect($allDelegates);
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'Delegate Name',
            'Email',
            'Phone',
            'Organization',
            'Job Title',
            'Registration ID',
            'Registrant Name',
            'Attended',
            'Registration Date'
        ];
    }

    /**
     * @param mixed $delegate
     * @return array
     */
    public function map($delegate): array
    {
        return [
            $delegate->name,
            $delegate->email,
            $delegate->phone,
            $delegate->organization,
            $delegate->jobTitle,
            $delegate->reg_id,
            $delegate->registrant,
            $delegate->attended,
            $delegate->reg_date,
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
