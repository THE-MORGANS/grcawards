<?php

namespace App\Http\Controllers;

use App\Models\LusakaSummitRegistration;
use App\Models\LusakaSponsorshipDownload;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\LusakaRegistrationsExport;
use App\Exports\LusakaAttendanceExport;

class LusakaRegistrationController extends Controller
{
    public function dashboard(Request $request)
    {
        $search = $request->input('search');
        $registrations = null;

        if ($search) {
            $registrations = LusakaSummitRegistration::where('registration_id', 'LIKE', "%{$search}%")
                ->orWhere('ticket_number', 'LIKE', "%{$search}%")
                ->orWhere('name', 'LIKE', "%{$search}%")
                ->orWhere('email', 'LIKE', "%{$search}%")
                ->orderBy('created_at', 'desc')
                ->get();
        } else {
            // Show recent registrations by default
            $registrations = LusakaSummitRegistration::orderBy('created_at', 'desc')
                ->limit(50)
                ->get();
        }

        // Get PDF downloads
        $pdfDownloads = LusakaSponsorshipDownload::orderBy('created_at', 'desc')->get();

        // Get statistics
        $stats = [
            'total_registrations' => LusakaSummitRegistration::count(),
            'paid_registrations' => LusakaSummitRegistration::where('payment_status', 'paid')->count(),
            'pending_registrations' => LusakaSummitRegistration::where('payment_status', 'pending')->count(),
            'total_delegates' => LusakaSummitRegistration::where('payment_status', 'paid')->sum('delegate_count'),
            'total_revenue' => LusakaSummitRegistration::where('payment_status', 'paid')->sum('amount'),
            'pdf_downloads' => LusakaSponsorshipDownload::count(),
        ];

        if ($request->ajax()) {
            return view('lusaka_admin.partials.registrations_table', compact('registrations'))->render();
        }

        return view('lusaka_admin.dashboard', compact('registrations', 'pdfDownloads', 'stats', 'search'));
    }

    public function exportToExcel(Request $request)
    {
        $status = $request->input('status', 'all');
        return Excel::download(new LusakaRegistrationsExport($status), 'lusaka_summit_registrations_' . $status . '_' . date('Y-m-d_His') . '.xlsx');
    }

    public function attendance(Request $request)
    {
        $search = $request->input('search');
        $registrations = LusakaSummitRegistration::orderBy('created_at', 'desc')->get();
        
        $allDelegates = [];
        foreach ($registrations as $reg) {
            $delegates = $reg->delegates_data ?? [];
            foreach ($delegates as $index => $delegate) {
                // Add context to delegate
                $delegate['db_id'] = $reg->id;
                $delegate['reg_id'] = $reg->registration_id;
                $delegate['reg_name'] = $reg->name;
                $delegate['index'] = $index;
                $delegate['payment_status'] = $reg->payment_status;
                $delegate['attended'] = $delegate['attended'] ?? false;
                
                // Filter if searching
                if ($search) {
                    $searchLower = strtolower($search);
                    $nameMatch = str_contains(strtolower($delegate['name'] ?? ''), $searchLower);
                    $emailMatch = str_contains(strtolower($delegate['email'] ?? ''), $searchLower);
                    $regIdMatch = str_contains(strtolower($reg->registration_id), $searchLower);
                    
                    if ($nameMatch || $emailMatch || $regIdMatch) {
                        $allDelegates[] = $delegate;
                    }
                } else {
                    $allDelegates[] = $delegate;
                }
            }
        }

        // Convert to collection for easier handling if needed
        $delegates = collect($allDelegates);

        if ($request->ajax()) {
            return view('lusaka_admin.partials.attendance_table', compact('delegates'))->render();
        }

        return view('lusaka_admin.attendance', compact('delegates', 'search'));
    }

    public function toggleAttendance(Request $request)
    {
        $reg = LusakaSummitRegistration::findOrFail($request->reg_id);
        $index = $request->delegate_index;
        $status = $request->status;

        $delegates = $reg->delegates_data;
        if (isset($delegates[$index])) {
            $delegates[$index]['attended'] = $status;
            $reg->delegates_data = $delegates;
            $reg->save();

            return response()->json(['success' => true]);
        }

        return response()->json(['success' => false, 'message' => 'Delegate not found'], 404);
    }

    public function exportAttendance(Request $request)
    {
        $status = $request->input('status', 'all');
        return Excel::download(new LusakaAttendanceExport($status), 'lusaka_attendance_' . $status . '_' . date('Y-m-d_His') . '.xlsx');
    }

    public function viewRegistration($id)
    {
        $registration = LusakaSummitRegistration::findOrFail($id);
        return view('lusaka_admin.view_registration', compact('registration'));
    }
}
