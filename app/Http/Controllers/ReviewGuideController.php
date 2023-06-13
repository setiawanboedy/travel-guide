<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;
use Illuminate\Support\Facades\Auth;
use App\Models\GuideRating;

class ReviewGuideController extends Controller
{
    public function index(Request $request, $id){
        $item = TourGuide::with(['travel_package'])->findOrFail($id);
        return view('pages.review-guide',[
            'item'=>$item
        ]);
    }

    public function create(Request $request, $id){
        $request->validate([
            'rating'=>'required|integer',
            'comment'=>'required|string'
        ]);

        $guide = TourGuide::findOrFail($id);

        $data = $request->all();
        $data['guides_id'] = $guide->id;
        $data['users_id'] = Auth::user()->id;
        $data['username'] = Auth::user()->username;

        GuideRating::create($data);

        // dd($data);

        return redirect()->route('guide-detail', $guide->slug);

    }
}
