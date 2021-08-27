<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('frontend/product');
    }
    public function sukses_orders_product(){
        return view('frontend/sukses_orders_product');
    }
}
