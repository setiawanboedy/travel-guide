<?php

namespace App\Http\Controllers\Admin;

use App\Models\TourGuide;
use App\Models\Transaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(Request $request){
        return view('pages.admin.dashboard',[
            'guides'=>TourGuide::count(),
            'transactions'=>Transaction::count(),
            'transaction_pending'=>Transaction::where('transaction_status','PENDING')->count(),
            'transaction_success'=>Transaction::where('transaction_status','SUCCESS')->count()
        ]);
    }
}
