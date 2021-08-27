<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepaidController extends Controller
{
    public function prepaid(){
        return view('frontend/prepaid');
    }
    public function adminHome(){
        return view('administrator/home');
    }
    function product(){
        return view('frontend/product');
    }
    function pay(){
        return view('frontend/pay');
    }
}
