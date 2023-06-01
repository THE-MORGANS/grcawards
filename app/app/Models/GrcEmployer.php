<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrcEmployer extends Model
{
    use HasFactory;
    protected $table = 'grc_employers';
    protected $fillable = ['award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'No_of_employees_who_rated', 'worklife_balance', 'pay_and_benefits', 'job_security_and_advancement', 'management', 'culture', 'average_rating', '80_percent_score', '20_percent_votes', 'overall_core', 'Status'];
}
