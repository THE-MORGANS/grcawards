<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use App\Models\Award;
use App\Models\Nominee;
use App\Models\Vote;
use App\Models\AwardProgram;
use App\Models\OtherVote;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;
use Illuminate\Support\Facades\Session;


class VoteController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth:voter');
        // $this->middleware('guest')->except('logout');

    }

    public function showVotingPage(Request $request, $sector)
    {
        
        $sector_id = Hashids::connection('sector')->decode($sector)[0];
        
        if (isset($sector_id) && Sector::where('id', $sector_id)->exists()){
            $sector= Sector::where('id', $sector_id)->first();
            $sector->category;
            $awards = Award::where('sector_id', $sector_id)->get();
            $nominees = Nominee::where('sector_id', $sector_id)->get();
            foreach($awards as $award){
                $award->hashid = Hashids::connection('award')->encode($award->id);
            }
            foreach($nominees as $nominee){
                $nominee->hashid = Hashids::connection('nominee')->encode($nominee->id);
            }
            return view('contents.voter.awards')->with(['awards' => $awards, 'sector' => $sector, 'nominees'=> $nominees]);
        }

        $request->session()->flash('danger', 'Could not find the data requested');
        return redirect()->back();
    }


    public function addVote(Request $request, $award_id, $nominee_id)
    {
        $real_award = Hashids::connection('award')->decode($award_id)[0];
        $real_nominee = Hashids::connection('nominee')->decode($nominee_id)[0];
        $award_program = AwardProgram::where('status',1)->first();
        $ip_address = $request->getClientIp();
        $user = Session::get('user');
        
        
        if (Vote::where([['voter','=',$user],['award_id','=',$real_award],['ip_address', '=',$ip_address]])->exists()){
            return response()->json('warning');
        }
        // elseif (Session::get('ip_address') != $ip_address){
        //     return response()->json('danger');
        // }
        else{
            $new_vote = new Vote;
            $new_vote->ip_address = $ip_address;
            $new_vote->award_program_id = $award_program->id;
            $new_vote->voter = $user;
            $new_vote->award_id = $real_award;
            $new_vote->nominee_id = $real_nominee;
            $new_vote->save();
            return response()->json('success');

        }

    }

    public function addOtherVote(Request $request, $award_id, $nominee)
    {
        $real_award = Hashids::connection('award')->decode($award_id)[0];
        $award_program = AwardProgram::where('status',1)->first();
        $ip_address = $request->getClientIp();
        $user = Session::get('user');

        if (OtherVote::where([['voter','=',$user],['award_id','=',$real_award],['ip_address', '=',$ip_address]])->exists()){
            return response()->json('warning');
        }
        // elseif (Session::get('ip_address') != $ip_address){
        //     return response()->json('danger');
        // }
        else{
            $new_vote = new OtherVote;
            $new_vote->ip_address = $ip_address;
            $new_vote->award_program_id = $award_program->id;
            $new_vote->award_id = $real_award;
            $new_vote->voter = $user;
            $new_vote->nominee = $nominee;
            $new_vote->save();
            return response()->json('success');

        }

    }

}
