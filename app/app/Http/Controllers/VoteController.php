<?php

namespace App\Http\Controllers;

use App\Models\Sector;
use App\Models\Award;
use App\Models\Nominee;
use App\Models\Vote;
use App\Models\MediaVote;
use App\Models\VoteCount;
use Illuminate\Http\Request;
use Vinkla\Hashids\Facades\Hashids;


class VoteController extends Controller
{

    public function __construct()
    {
         $this->middleware('auth:voter');
        // $this->middleware('guest')->except('logout');

    }

    public function showVotingPage(Request $request, $sector)
    {

        // return back();
        $sector_id = Hashids::connection('sector')->decode($sector)[0];
        
        if (isset($sector_id) && Sector::where('id', $sector_id)->exists()){
            $sector= Sector::where('id', $sector_id)->first();
            $sector->category;
            $awards = Award::where('sector_id', $sector_id)->get();
            $nominees = Nominee::where('sector_id', $sector_id)->orderBy('name', 'ASC')->get();
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

        return back();
        $real_award = Hashids::connection('award')->decode($award_id)[0];
        $real_nominee = Hashids::connection('nominee')->decode($nominee_id)[0];

        $ip_address = $request->getClientIp();
        
        $votes = Vote::where(['voter' => auth('voter')->user()->id,  'award_id' => $real_award])->first();
        if(!empty($votes)){
            return response()->json('warning');
        //     return response()->json('warning',200);
        // }elseif (Vote::where([[auth('voter')->user()->id => $ip_address],['award_id','=',$real_award]])->exists()){
        //     return response()->json('warning');
        // }elseif (Auth()->guard('voter')->user()->ip_address != $ip_address){
        //     return response()->json('danger');
        // if (Vote::where(['ip_address' => $ip_address,'award_id' => $real_award])->exists()){
        //     return response()->json('warning');
        }else{
            $new_vote = new Vote;
            $new_vote->ip_address = $ip_address;
            $new_vote->award_program_id = 2;
            $new_vote->voter =  auth('voter')->user()->id;
            $new_vote->award_id = $real_award;
            $new_vote->nominee_id = $real_nominee;
            $new_vote->save();

           $votes = VoteCount::where(['nominee_id' => $real_nominee, 'award_id' => $real_award])->first();
           if(!empty($votes)){
            $votes->update(['voteCount' => $votes->voteCount + 1]);
           }else{
            VoteCount::create([
                'nominee_id' => $real_nominee,
                'award_id' => $real_award,
                'award_program_id' => 2,
                'voteCount' => 1
            ]);
           }
      return response()->json('success');

    }
    }

    public function addMediaVote(Request $request, $award_id, $nominee)
    {
       
        return back();
        $real_award = Hashids::connection('award')->decode($award_id)[0];
       
        $ip_address = $request->getClientIp();
       
       if(MediaVote::where([['voter', '=', auth('voter')->user()->id],['award_id','=',$real_award]])->exists()){
            return response()->json('warning',200);
        // }elseif (MediaVote::where([['ip_address','=',$ip_address],['award_id','=',$real_award]])->exists()){
        //     return response()->json('warning');
        // }elseif (Auth()->guard('voter')->user()->ip_address != $ip_address){
        //     return response()->json('danger');
       
       }else{
            $new_vote = new MediaVote;
            $new_vote->ip_address = $ip_address;
            $new_vote->award_program_id = 2;
            $new_vote->voter = Auth('voter')->user()->id;
            $new_vote->award_id = $real_award;
            $new_vote->nominee = $nominee;
            $new_vote->save();
            return response()->json('success');

       }

    }

}
