<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function sample(){
        // echo "welcome to my page:) ";
        return view('front.test',['name'=>'abanoub gayed','family'=>'beshara']);

    }
}
