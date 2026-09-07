<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JudgeFeedbackSurvey extends Model
{
    protected $table = 'judge_feedback_surveys';

    protected $fillable = [
        'admin_id', 'award_program_id', 'region', 'answers', 'testimonial_text', 'testimonial_consent',
    ];

    protected $casts = [
        'answers' => 'array',
    ];

    public function judge()
    {
        return $this->belongsTo(Admin::class, 'admin_id');
    }

    public function awardProgram()
    {
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }
}
