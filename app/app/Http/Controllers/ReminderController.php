<?php

namespace App\Http\Controllers;

use App\Mail\RemiderMail;
use App\Models\SummitRegistration;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class ReminderController extends Controller
{

    public function emailPage()
    {
        return view('contents.admin.emails');
    }

    public function sendEmail(Request $request)
    {
        $valid = Validator::make($request->all(), [
            'subject' => 'required',
            'content' => 'required',
        ]);

        if($valid->fails())
        {
            Session::flash('alert', 'error');
            Session::flash('message', 'Some fields are missing');
            return back();
        }
        if($request->attachment)
        {
            $file = $request->attachment;
            $file->move('files', 'grcawards.pdf');
        }
        $data = [
            'subject' => $request->subject,
            'content' => $request->content,
            'attachment' => asset('files/grcawards.pdf')
        ];

        try{

        if($request->emails)
        {
            $emails = explode(',',$request->emails);
            if($emails > 0)
            {
                foreach($emails as $email)
                {
                   
                    Mail::to($email)->send(new RemiderMail($data));
                }
            }else{
            Mail::to($request->emails)->send(new RemiderMail($data));
            Session::flash('success', 'Email sent successfully');
            return back();
            }
        }else{
        $summitemail = SummitRegistration::get();
        foreach($summitemail as $summit)
        {
            $data['name'] = $summit->first_name.' '.$summit->last_name;
            Mail::to($summit->email)->send(new RemiderMail($data));
        }
        }

        Session::flash('success', 'Email sent successfully');
        return back();
    }catch(\Exception $e){
        Session::flash('danger', $e->getMessage());
        return back();
    }

    }

}
