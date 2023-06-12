<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;

class DestDetailController extends Controller
{
    public function index(Request $request, $slug){
        $item = TravelPackage::with(['travel_galleries'])->where('slug',$slug)->firstOrFail();
        return view('pages.dest-detail',[
            'item'=>$item
        ]);
    }
}
