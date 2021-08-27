<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrepaidController extends Controller
{
    public function prepaid(){
        return view('frontend/prepaid');
    }
    public function createOrder(Request $request){
        // $request->validate([
        //     'mobile_number' =>'required',
        //     'value' => 'required',
        // ]);
        // Post::create($request->all());
        // return redirect()->route('frontend/sukses_orders_balance');
        return view('frontend/sukses_orders_balance');
    }
}
