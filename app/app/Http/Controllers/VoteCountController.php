<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;
use App\Models\Vote;
use App\Models\AwardProgram;
use App\Models\Category;
use App\Models\Sector;
use App\Models\Award;
use App\Models\Nominee;
use App\Exports\SectorsAwardsExport;
use Maatwebsite\Excel\Facades\Excel;

class VoteCountController extends Controller
{


    public function getCatSec($award_program_id )
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0];

        $categories = Category::where('award_program_id', $award_program)->get();

        foreach($categories as $category){
            $category->hashid = Hashids::connection('category')->encode($category->id);
            $category->sectors;

            $award_ids = $category->sectors->flatMap(function ($sector) {
                return $sector->awards->pluck('id');
            });

            foreach($category->sectors as $sector){
                $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            }

            $category->vote_total = Vote::whereIn('award_id', $award_ids)->count();
        }
        return view('contents.admin.cat_sec')->with(['categories'=>$categories, 'award_program'=>$award_program_id]);
    }

    public function getSectorsAwards($award_program_id, $category_id)
    {
        $award_program = Hashids::connection('awardProgram')->decode($award_program_id)[0];
        $category= Hashids::connection('category')->decode($category_id)[0];

        $sectors = Sector::where([['award_program_id','=', $award_program],['category_id','=',$category]])->get();
        $category_dets = Category::find($category);
        $nominees = Nominee::where('award_program_id', $award_program)->get();

        foreach($sectors as $sector){
            $sector->hashid = Hashids::connection('sector')->encode($sector->id);
            $sector->awards;
            foreach($sector->awards as $award){
                $award->hashid = Hashids::connection('award')->encode($award->id) ;

            }
        }

        // Votes cast per (award, nominee) pair — one grouped query instead of the
        // previous per-nominee nested loop over every vote in the award program.
        $award_ids = $sectors->flatMap(function ($sector) {
            return $sector->awards->pluck('id');
        });

        $vote_counts = Vote::whereIn('award_id', $award_ids)
            ->select('award_id', 'nominee_id', DB::raw('count(*) as total'))
            ->groupBy('award_id', 'nominee_id')
            ->get();

        $big_votes = [];
        $award_totals = [];
        foreach ($vote_counts as $vc) {
            $big_votes[$vc->nominee_id][$vc->award_id] = $vc->total;
            $award_totals[$vc->award_id] = ($award_totals[$vc->award_id] ?? 0) + $vc->total;
        }

        $sector_totals = [];
        foreach ($sectors as $sector) {
            $sector_totals[$sector->id] = 0;
            foreach ($sector->awards as $award) {
                $sector_totals[$sector->id] += $award_totals[$award->id] ?? 0;
            }
        }

        $category_total = array_sum($award_totals);

        foreach($nominees as $nominee){
            $nominee->hashid = Hashids::connection('nominee')->encode($nominee->id);
        }

        return view('contents.admin.sectors_awards')->with([
            'big_votes'=>$big_votes,
            'award_totals'=>$award_totals,
            'sector_totals'=>$sector_totals,
            'category_total'=>$category_total,
            'sectors'=>$sectors,
            'nominees'=>$nominees,
            'category'=>$category_dets,
            'award_program'=>$award_program_id,
        ]);
    }

    public function exportSectorsAwards($award_program_id, $category_id)
    {
        $category = Category::find(Hashids::connection('category')->decode($category_id)[0]);
        $filename = 'votes_' . \Illuminate\Support\Str::slug($category->name) . '_' . date('Y-m-d_His') . '.xlsx';

        return Excel::download(new SectorsAwardsExport($award_program_id, $category_id), $filename);
    }
}
