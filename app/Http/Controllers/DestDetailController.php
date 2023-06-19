<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use App\Models\TourGuide;

class DestDetailController extends Controller
{
    public function index(Request $request, $slug){
        $item = TravelPackage::with(['travel_galleries'])->where('slug',$slug)->firstOrFail();
        $guides = TourGuide::get();

        return view('pages.dest-detail',[
            'item'=>$item,
            'guides' =>$guides->take(6)

        ]);

    }
}
