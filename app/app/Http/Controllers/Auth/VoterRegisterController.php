<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Events\VoterRegistered;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\Voter;
use App\Http\Traits\TokenTrait;
// use App\Models\AwardProgram;
use Vinkla\Hashids\Facades\Hashids;


class VoterRegisterController extends Controller
{
    use TokenTrait;

    public function __construct()
    {
        $this->middleware('guest');
        $this->middleware('guest:voter');

    }
    
    public function showRegisterForm()
    {
        return view('contents.voter.register');
    }

    public function register(Request $request)
    {
        // return back();
        $this->validator($request->only('email'))->validate();
        $ip_address = $request->getClientIp();
      
        // if(Voter::where(['ip_address'=> '1218129812'])->exists()){
        // $request->session()->flash('danger', 'An account has been created with this device.');
        
        // return redirect()->back();
        // }else{
           $voter = Voter::where(['email' => $request->email])->first();
          
           if(!$voter)
           {
            $voter = $this->create(['email'=>$request->email, 'i_agree'=>$request->i_agree, 'ip_address' => $ip_address]);
           }
            // if ($this->registered($request, $voter)) {
                sleep(1);
                $voter = Voter::where(['email' => $request->email])->first();
                // dd($voter);
                Auth::guard('voter')->loginUsingId($voter->id);
                $request->session()->flash('success', 'Account registered successfully');
                return redirect()->back();
            // }
        // }
    }
    
    protected function create(array $data)
    {
        // $award_program = AwardProgram::where('status', 1)->latest()->first();

        // return back();
        return Voter::create([
            'email' => $data['email'],
            'token' => $this->getToken(10),
            'ip_address' => $data['ip_address'],
            'agreement' => $data['i_agree'] == '1Xagrzi' ? 1 : 0,
            'award_program_id' => 5
        ]);
    }

    protected function registered(Request $request, $voter)
    {
        session()->put('voter',$voter);
        $request->session()->flash('success', 'Registeration successful');
        return redirect()->back();
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'email' => [ 'required', 'string', 'email', 'max:255'],
        ]);
    }

    public function showPostRegisterForm(){
        return view('contents.voter.register_success');
    }


}
