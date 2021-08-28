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
            'mobile_number' => 'required|min:12|integer',
            'value' => 'required|integer',
        ]);
        Prepaid::create($request->all());
        return view('prepaid');

        // $prepaid = new Prepaid;
        // $prepaid->mobile_number = ($request->mobile_number);
        // $prepaid->value = ($request->value);
        // $prepaid->save();

        // return view('frontend/sukses_orders_balance');

    }
}
