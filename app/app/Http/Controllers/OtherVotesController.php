<?php

namespace App\Http\Controllers;
use App\Models\{
    ComBankChiefRiskOfficer,
    ComBankFraudAwareness,
    ComBankRiskComplaince,
    GrcAntiFinCrimReporter,
    GrcEmployer,
    GrcSolutionProvider,
    GrcTrainingProvider,
    JudgesVotes,
    CrimePreventionAdvisoryService
};

use Illuminate\Support\Facades\DB;
use Vinkla\Hashids\Facades\Hashids;
use App\Traits\NomineeResults;
use App\Traits\JudgeVotes;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Traits\AwardsGroups;

use App\Models\Admin;
use App\Models\Award;
use App\Traits\NomineesAwards;
use App\Models\Judge;
use App\Models\Sector;
use App\Models\Category;
use App\Models\AwardProgram;

use Illuminate\Http\Request;

class OtherVotesController extends Controller
{
    //


    public function __construct()
    {
        return $this->middleware('AdminMiddleware');
    }

}
