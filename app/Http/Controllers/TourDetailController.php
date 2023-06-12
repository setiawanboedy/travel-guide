<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TourDetailController extends Controller
{
    public function index(Request $request){
        return view('pages.tour-detail');
    }
}
