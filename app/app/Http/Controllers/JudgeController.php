<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SummitRegistration;
use Vinkla\Hashids\Facades\Hashids;

class JudgeController extends Controller
{
    
    public function __construct() {
        return $this->middleware('auth:admin');
       }

       
    public function Index(Request $request, $award_program){
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $categories = Category::where('award_program_id', $award_program)->get();
        foreach ($categories as $category) {
            $category->hashid = Hashids::connection('category')->encode($category->id);
        
            return view('contents.admin.judges.category')->with(['categories' => $categories, 'award_program'=> $award_program_id]);
        }
            $request->session()->flash('danger', 'Could not the data you requested!');
            return redirect()->back();
    }

    public function ShowRegisteredUsers($award_program){
        $award_program_id = Hashids::connection('awardProgram')->decode($award_program);
        $registered = SummitRegistration::where('created_at', '>=', '2024-010-1 21:47:52')->latest()->get();
    
        return view('contents.admin.registered')->with(['registered' => $registered, 'award_program'=> $award_program_id]);
    }

}
