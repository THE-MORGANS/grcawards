<?php

namespace App\Http\Controllers;

use App\Models\LusakaSponsorshipDownload;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class LusakaSponsorshipController extends Controller
{
    public function downloadProspectus(Request $request)
    {
        $request->validate([
            'full_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
        ]);

        // Save to database
        LusakaSponsorshipDownload::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ]);

        $filePath = public_path('assets/GRCFPLusakaSponsorshipProspectus.pdf');

        if (!File::exists($filePath)) {
            return response()->json(['status' => 'error', 'message' => 'Sponsorship prospectus file not found.'], 404);
        }

        return response()->json([
            'status' => 'success',
            'download_url' => asset('assets/GRCFPLusakaSponsorshipProspectus.pdf'),
            'file_name' => 'GRCFPLusakaSponsorshipProspectus.pdf'
        ]);
    }
}
