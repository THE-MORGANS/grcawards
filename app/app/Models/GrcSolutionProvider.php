<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrcSolutionProvider extends Model
{
    use HasFactory;

    protected $table = 'grc_solution_providers';
    protected $fillable = ['award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'profile_of_the_software_provider', 'areas_of_grc_the_software_covers', 'clients_of_grc_software_providers', 'clients_rating_of_grc_software_provider', 'affiliations', '80_percent_score', '20_percent_votes', 'overall_core', 'Status'];
   
   
    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
}
