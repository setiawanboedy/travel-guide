<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;

class TourDetailController extends Controller
{
    public function index(Request $request, $slug){
        $item = TourGuide::with(['travel_package', 'ratings'])->where('slug',$slug)->firstOrFail();
        return view('pages.tour-detail',[
            'item'=>$item
        ]);
    }
}
