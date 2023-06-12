<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;

class TourGuideController extends Controller
{
    public function index(Request $request){

        $items = TourGuide::get();
        return view('pages.tour-guide', [
            'items'=>$items
        ]);
    }
}
