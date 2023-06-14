<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TravelPackage;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecommendationGuideController;

class DestDetailController extends Controller
{
    public function index(RecommendationGuideController $recommendGuide, $slug){
        $item = TravelPackage::with(['travel_galleries', 'tour_guides'])->where('slug',$slug)->firstOrFail();
        $userId = Auth::user()->id;
        $recommendations = $recommendGuide->generateRecommendations($userId,4);
        return view('pages.dest-detail',[
            'item'=>$item,
            'recommendations'=>$recommendations
        ]);
        print_r($userId);


    }
}
