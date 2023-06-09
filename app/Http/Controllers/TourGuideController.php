<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourGuideController extends Controller
{
    public function index(Request $request){
        return view('tour-guide');
    }
}
