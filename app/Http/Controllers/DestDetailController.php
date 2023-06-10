<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DestDetailController extends Controller
{
    public function index(Request $request){
        return view('dest-detail');
    }
}
