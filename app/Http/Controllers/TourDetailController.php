<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\RecommendationGuideController;

class TourDetailController extends Controller
{
    public function index(RecommendationGuideController $recommendC, Request $request, $slug){
        $item = TourGuide::with(['travel_package', 'ratings'])->where('slug',$slug)->firstOrFail();

        $userId = Auth::user()->id;
        $recommendations = $recommendC->generateRecommendations($userId,4);

        return view('pages.tour-detail',[
            'item'=>$item,
            'recommendations'=>$recommendations
        ]);
    }
}
