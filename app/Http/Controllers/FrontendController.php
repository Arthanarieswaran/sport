<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function reg(){
        return view('frontend.layouts.gamelist');
    }

    public function running(){
        return view('frontend.layouts.running');
    }
}
