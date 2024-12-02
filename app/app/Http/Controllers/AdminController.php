<?php

namespace App\Http\Controllers;

use App\Models\AwardProgram;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    public function getAdmins()
    {
        echo "This is the Admin Page";
    }

    public function UploadFile(){

        return view('contents.admin.imageUpload')
        ->with('awardProgram', AwardProgram::get());
}
    public function UploadFiles(Request $request){

        foreach($request->file('images') as $images){
            $image_url = cloudinary()->upload($images->getRealPath(), [
                'folder' => 'grcfincrimeawards/gallery/'
            ])->getSecurePath();

            $progam = AwardProgram::where('status', 1)->first();
      Gallery::create([
            'award_program_id' => $request->award_program,
            'path' => $image_url,
            'type' => 'image'

         ]);
}
return back();
}

}