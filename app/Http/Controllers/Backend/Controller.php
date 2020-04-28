<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller as Base;

class Controller extends Base
{
    public function __constructor(){
        $this->middleware('auth');
    }
}
