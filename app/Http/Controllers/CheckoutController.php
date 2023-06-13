<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;


class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id)
    {
        $item = Transaction::with(['transaction_details','travel_package','user'])
        ->findOrFail($id);

        return view('pages.checkout',[
            'item'=>$item
        ]);
    }

    public function process(Request $request, $id){
        $travel_package = TravelPackage::findOrFail($id);

        $transaction = Transaction::create([
            'travel_packages_id'=>$id,
            'users_id' => Auth::user()->id,
            'transaction_total'=>$travel_package->price,
            'transaction_status'=>'IN_CART'
        ]);

        TransactionDetail::create([
            'transactions_id'=>$transaction->id,
            'username'=>Auth::user()->username,
            'nationality'=>'ID'
        ]);

        return redirect()->route('checkout-package', $transaction->id);
    }

    public function remove(Request $request, $detail_id){
        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['transaction_details','travel_package'])
        ->findOrFail($item->transactions_id);

        $transaction->transaction_total-=$transaction->travel_package->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout-package', $item->transactions_id);
    }

    public function create(Request $request, $id){
        $request->validate([
            'username'=>'required|string|exists:users,username',
            'nationality'=>'required|string'
        ]);

        $data = $request->all();
        $data['transactions_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_package'])->find($id);

        $transaction->transaction_total += $transaction->travel_package->price;

        $transaction->save();

        return redirect()->route('checkout-package', $id);
    }

    public function success(Request $request, $id){
        $transaction = Transaction::findOrFail($id);

        if ($transaction->transaction_status == 'IN_CART') {
            $transaction->transaction_status = 'PENDING';
        }

        $transaction->save();

        $item = Transaction::with(['transaction_details','travel_package','user'])
        ->findOrFail($id);

        return view('pages.review',[
            'item'=>$item
        ]);
    }
}
