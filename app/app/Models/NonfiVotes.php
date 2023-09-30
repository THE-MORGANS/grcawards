<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NonfiVotes extends Model
{
    use HasFactory;

    protected $table = 'nonfi_votes';
    protected $fillable = ['award_id', 'nominee_name', 'sector_id', 'number_of_votes', 'percentage_votes', 'No_of_employees_who_rated', 'worklife_balance', 'pay_and_benefits', 'job_security_and_advancement', 'management', 'culture', 'average_rating', 'additional_information', 'adverse_media', 'judges_votes', 'total_of_judges_score_converted_to_percentage', 'eighty_percent_of_judges_score', 'twenty_percent_votes', 'overall_score', 'status'];

    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
}
