<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WomenInGrc extends Model
{
    protected $table = "women_in_grcs";
    protected $fillable = ['award_id', 'nominee_name', 'sector_id', 'nominee_id', 'number_of_votes', 'percentage_votes', 'Company_and_linkedin_profile_link', 'recognised_professional_association_membership', 'adverse_media', 'judges_votes', 'total_of_judges_score_converted_to_percentage', 'eighty_percent_of_judges_score', 'twenty_percent_votes', 'overall_score', 'status'];
    use HasFactory;

    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }

    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
}
