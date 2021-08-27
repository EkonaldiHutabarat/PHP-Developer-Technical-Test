<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepaidController extends Controller
{
    public function prepaid(){
        return view('frontend/prepaid');
    }
    public function sukses_orders_balance(){
        return view('frontend/sukses_orders_balance');
    }
}
