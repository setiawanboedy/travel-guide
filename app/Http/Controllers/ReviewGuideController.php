<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;
use Illuminate\Support\Facades\Auth;
use App\Models\GuideRating;
use App\Models\Transaction;

class ReviewGuideController extends Controller
{
    public function index(Request $request, $transId){
        $trans = Transaction::with([
            'transaction_details','travel_package', 'guide_package', 'user'
            ])->findOrFail($transId);
        return view('pages.review-guide',[
            'item'=>$trans
        ]);
    }

    public function create(Request $request, $guideId){
        $request->validate([
            'rating'=>'required|integer',
            'comment'=>'required|string'
        ]);
        $guide = TourGuide::findOrFail($guideId);

        $data = $request->all();
        $data['guides_id'] = $guide->id;
        $data['users_id'] = Auth::user()->id;
        $data['username'] = Auth::user()->username;

        GuideRating::create($data);

        return redirect()->route('guide-detail', $guide->slug);

    }
}
