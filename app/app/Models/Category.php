<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    protected $fillable = ['name', 'description','award_program_id', 'is_non_voting_category'];

    public function awardProgram(){
        return $this->belongsTo(AwardProgram::class, 'award_program_id');
    }

    public function sectors(){
        return $this->hasMany(Sector::class, 'category_id')->with('awards');
    }

    public function countAwards($award_program_id){
        return Award::where('award_program_id', $award_program_id)->get();
    }

    public function UserVotes(){
     return   Vote::where('voter', auth('voter')->user()->id)->get();
    }

    public function AdminVotes(){
        return JudgesVotes::where('judge_id', auth('admin')->user()->id)->select('award_id')->distinct()->get();
       }


}
