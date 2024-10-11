<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MediaVote extends Model
{
    use HasFactory;
    protected $table = 'other_votes';

    protected $fillable = ['voter', 'ip_address', 'award_id','nominee_id', 'nominee', 'award_program_id'];
    public function awards(){
        return $this->belongsTo(Award::class, 'award_id', 'id');
    }
    public function nominee(){
        return $this->belongsTo(Nominee::class, 'nominee_id', 'id');
    }
}
