<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GuideRating;

class ReviewController extends Controller
{
    public function create(Request $request){

        // $request->validate([
        //     'rating'=> 'required|integer',
        //     'comment'=>'string',
        // ]);

        // $data = $request->all();
        // $data['guides_id'] = 1;
        // $data['users_id'] = 1;

        // GuideRating::create($data);
        return view('pages.review');
    }
}
