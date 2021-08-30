<?php

namespace App\Http\Controllers;
use App\Models\Prepaid;
use App\Models\Balance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PrepaidController extends Controller
{
    public function prepaid(){
        $balances = Balance::all();
        return view('frontend/prepaid', compact('balances'));
    }

    public function Order(Request $request){



        $request->validate([
            'mobile_number' => 'required',
            'value'=> 'required',
        ]);
        Prepaid::create($request->all());
        $prepaids = Prepaid::all();
        return view('frontend/sukses_orders_balance', compact('prepaids'));
    }
    // public function orderDetail(Prepaid $prepaid){
    //     return view('frontend/sukses_orders_balance');
    // }
}
