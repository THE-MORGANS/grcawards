<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrcTrainingProvider extends Model
{
    use HasFactory;

    protected $table = 'grc_training_providers';
    protected $fillable = ['award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'profile_of_the_training_provider_and_areas_of_grc_covered', 'evidence_of_innovative_ways_of_teaching', 'clients_of_training_providers', 'clients_rating_of_training_provider', 'affiliations', 
    'judges_votes', 'total_of_judges_score_converted_to_percentage', 'eighty_percent_of_judges_score', 'twenty_percent_votes', 'overall_score', 'status'];
    
    
    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
}
