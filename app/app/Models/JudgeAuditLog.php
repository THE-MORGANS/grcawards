<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JudgeAuditLog extends Model
{
    public $timestamps = false;

    protected $table = 'judge_audit_logs';

    protected $fillable = [
        'admin_id', 'award_program_id', 'award_id', 'event', 'ip_address', 'user_agent', 'created_at',
    ];

    protected $casts = [
        'created_at' => 'datetime',
    ];

    public function judge()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function award()
    {
        return $this->belongsTo(Award::class, 'award_id');
    }

    public function awardProgram()
    {
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    /**
     * Record a judge activity event. Only judges (role_id 3) are logged —
     * other admin roles are ignored so the audit stays focused on judging activity.
     */
    public static function record(?Admin $admin, string $event, ?int $awardId = null, ?int $awardProgramId = null): void
    {
        if (!$admin || (int) $admin->role_id !== 3) {
            return;
        }

        static::create([
            'admin_id' => $admin->id,
            'award_program_id' => $awardProgramId ?? AwardProgram::where('status', 1)->value('id'),
            'award_id' => $awardId,
            'event' => $event,
            'ip_address' => request()->ip(),
            'user_agent' => substr((string) request()->userAgent(), 0, 255),
            'created_at' => now(),
        ]);
    }
}
