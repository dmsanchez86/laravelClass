<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function home(){
        return view('home');
    }
}
