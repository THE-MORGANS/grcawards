<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Vinkla\Hashids\Facades\Hashids;

class Award extends Model
{
    use HasFactory;

    protected $table = "awards";

    protected $fillable = ['name', 'sector_id','award_program_id', 'name', 'description', 'criteria'];

    public function awardProgram(){
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function sector(){
        return $this->belongsTo(Sector::class, 'sector_id');
    }

    public function hasNominee($award_id)
    {
        $nominee = Nominee::get();
        foreach($nominee as $nomine) {
            $nomine->hashid = Hashids::connection('nominee')->encode($nomine->id);
        }
        $hasAwards = $nominee->filter(function($awards) use ($award_id)
        {
            return in_array($award_id, json_decode($awards->award_ids));
        });
        return $hasAwards;
    }
    

    public function IsVoted($award_id)
    {
        $voter = auth('voter')->user()->id;
        $vote = Vote::where(['voter' =>  $voter, 'award_id' => $award_id])->first();
        return $vote;

    }


    public function IsJudgeVoted($award_id)
    {
        $voter = auth('admin')->user()->id;
        $vote = JudgesVotes::where(['judge_id' =>  $voter, 'award_id' => $award_id])->first();
        return $vote;

    }

}
