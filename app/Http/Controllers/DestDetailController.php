<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestDetailController extends Controller
{
    public function index(Request $request){
        $item = TravelPackage::with(['travel_galleries'])->where('slug',$slug)->firstOrFail();
        return view('dest-detail',[
            'item'=>$item
        ]);
    }
}
