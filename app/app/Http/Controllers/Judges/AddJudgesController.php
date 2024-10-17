<?php

namespace App\Http\Controllers\Judges;

use App\Http\Controllers\Controller;
use App\Mail\JudgesRegister;
use App\Models\Admin;
use App\Models\AwardProgram;
use App\Models\Judge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Vinkla\Hashids\Facades\Hashids;

class AddJudgesController extends Controller
{
    public function addJudges(Request $request, $award_program)
    {
        $validated = Validator::make($request->all(),[
            'fullname' => 'required',
            'email' => 'required|unique:admins,email',
            'password' => 'required|min:5',
        ]);
        if($validated->fails()){
            $request->session()->flash('error', 'Some Fields are missing');
            return back()->withInput($request->all())->withErrors($validated);
        }
        $names = explode(' ', $request->fullname);
        // dd($request->fullname);
        if($names[0]){
            $firstName = $names[0];
        }else{
            $firstName = "Admin";
        }

        if($names[1]){
            $LastName = $names[1];
        }else{
            $LastName = "Admin";
        }
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        if (isset($award_program_id[0]) && AwardProgram::where('id', $award_program_id[0])->exists()) {
            try{
                //  $password = substr(str_replace('','/, =, +, &, %, #, @, !', base64_encode(random_bytes(20))), 0,10);
                $admin = new Admin();
                $admin->firstname = $firstName;
                $admin->lastname = $LastName;
                $admin->email = $request->email;
                $admin->role_id = 3;
                $admin->password = bcrypt($request->password);
                $admin->save();

                sleep(2);
                $admins = Admin::latest()->first();
                $judge = new Judge;
                $judge->admin_id = $admins->id;
                $judge->name = $request->fullname;
                $judge->award_program_id  = $award_program_id[0];
                $judge->position = $request->position; 
                $judge->profile = $request->profile; 
                $judge->email = $request->email;
                $judge->password = bcrypt($request->password);
                $judge->save();

                $data = [
                    'name' => $request->fullname,
                    'email' => $request->email,
                    'password' => $request->password
                ];

              Mail::to([$request->email, 'no-reply@grcfincrimeawards.com'])->send(new JudgesRegister($data));
                    $request->session()->flash('success', 'Judge Added Successfully');
                    return redirect()->route('admin.get_judges', $award_program);
            }catch(\Exception $e)
            {
                $request->session()->flash('danger', $e->getMessage()); // return error
                return redirect()->route('admin.get_judges', $award_program);
            }
    }
}

}