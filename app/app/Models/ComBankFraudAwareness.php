<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ComBankFraudAwareness extends Model
{
    use HasFactory;

    protected $table = 'com_bank_fraud_awarenesses';
    protected $fillable = ['award_id', 'nominee_id', 'sector_id', 'number_of_votes', 'percentage_votes', 'fraud_awareness', 'fraud_prevention_policies', 'additional_information', 'adverse_media', '80_percent_score', '20_percent_votes', 'overall_core', 'Status'];


    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
}
