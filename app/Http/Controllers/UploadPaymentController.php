<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;

class UploadPaymentController extends Controller
{
    public function index(Request $request, $transId){
        return view('pages.upload-payment',[
            'transId'=>$transId
        ]);
    }

    public function update(Request $request, $transId){
        $request->validate([
            'image'=>'required|image'
        ]);
        $data = $request->all();
        $data['image'] = $request->file('image')->store(
            'assets/transactions','public'
        );
        $trans = Transaction::findOrFail($transId);
        $trans->update($data);

        return redirect()->route('review-guide', $trans->id);
    }
}
