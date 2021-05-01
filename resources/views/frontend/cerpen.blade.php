@extends('layouts.main')

@section('content')
<div class="main">
        <div class="wrap">
            <div class="section group">
                <div class="cont ">
                    <h2 class="head">Cerpen</h2>
                    <div class="top-box">
                        <div class="col_1_of_3 span_1_of_3">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="{{asset('images/coret coret.jpg')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Coret coret</p>
                                            <div class="price1">
                                                <span class="actual">Rp. 45.000</span>
                                            </div>
                                        </div>
                                        <div class="cart-right"> </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="{{asset('images/cinta.jpg')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Cinta Tak Ada Mati</p>
                                            <div class="price1">
                                                <span class="actual">Rp. 140.000</span>
                                            </div>
                                        </div>
                                        <div class="cart-right"> </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col_1_of_3 span_1_of_3">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="{{asset('images/kereta tidur.jpg')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Kereta Tidur</p>
                                            <div class="price1">
                                                <span class="actual">Rp. 30.000</span>
                                            </div>
                                        </div>
                                        <div class="cart-right"> </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </a>
                        </div>

                        <div class="clear"></div>
                    </div>
                </div>

                <div class="clear"></div>
            </div>
        </div>
    </div>
@endsection
