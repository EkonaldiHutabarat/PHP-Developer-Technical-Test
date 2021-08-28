<?php

namespace App\Http\Controllers;
use App\Models\Prepaid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PrepaidController extends Controller
{
    public function prepaid(){
        return view('frontend/prepaid');
    }

    public function balanceOrder(Request $request){
        $request->validate([
            'mobile_number' => 'required',
            'value'=> 'required',
        ]);
        Prepaid::create($request->all());
        return view('frontend/sukses_orders_balance');
    }
}
