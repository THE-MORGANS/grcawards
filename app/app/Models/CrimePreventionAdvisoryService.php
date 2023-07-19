<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CrimePreventionAdvisoryService extends Model
{
    use HasFactory;

    protected $table = 'crime_prevention_advisory_services';
    protected $fillable = ['award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'profile_of_the_advisory_service_provider', 'evidence_of_innovative_ways_of_promoting', 'clients_of_advisory_services', 'client_rating_of_advisory_service_provider', 'affiliations', 'judges_votes', 'total_of_judges_score_converted_to_percentage', 'eighty_percent_of_judges_score', 'twenty_percent_votes', 'overall_score', 'status'];

    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }

}
