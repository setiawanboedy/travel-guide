<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TourGuide;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Support\Facades\Auth;

class HireGuideController extends Controller
{
    public function index(Request $request, $id){
        $item = TourGuide::with(['travel_package'])->findOrFail($id);
        return view('pages.hire-guide',[
            'item'=>$item
        ]);
    }

    public function create(Request $request, $id){

        $tour_guide = TourGuide::with(['travel_package'])->findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id'=>$tour_guide->travel_package->id,
            'users_id' => Auth::user()->id,
            'transaction_total'=>$tour_guide->price+100000,
            'transaction_status'=>'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id'=>$transaction->id,
            'username'=>Auth::user()->username,
            'nationality'=>'ID'
        ]);

        return redirect()->route('review-guide', $tour_guide->id);
    }
}
