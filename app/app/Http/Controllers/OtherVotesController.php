<?php

namespace App\Http\Controllers;

class OtherVotesController extends Controller
{
    //


    public function __construct()
    {
        return $this->middleware('AdminMiddleware');
    }

}
