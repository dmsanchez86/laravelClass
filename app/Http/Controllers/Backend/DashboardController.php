<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Backend\Controller;
use App\User;

class DashboardController extends Controller{

    function index(User $users){
        return view('dashboard', ['users' => $users->get()]);
    }
}
