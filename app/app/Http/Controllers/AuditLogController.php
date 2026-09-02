<?php

namespace App\Http\Controllers;

use App\Models\JudgeAuditLog;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;

class AuditLogController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(Request $request, $award_program)
    {
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program)[0] ?? null;

        $logs = JudgeAuditLog::with(['judge', 'award'])
            ->when($award_program_id, fn ($query) => $query->where('award_program_id', $award_program_id))
            ->when($request->filled('event'), fn ($query) => $query->where('event', $request->input('event')))
            ->orderByDesc('created_at')
            ->paginate(30)
            ->withQueryString();

        return view('contents.admin.audit_logs', [
            'logs' => $logs,
            'award_program' => $award_program,
            'eventFilter' => $request->input('event'),
        ]);
    }
}
