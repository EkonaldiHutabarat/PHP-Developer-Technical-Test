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
                                        <img src="{{asset('images/100 kebiasaan.png')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Komik 100 Kebiasaan Nabi Seri 1 </p>
                                            <div class="price1">
                                                <span class="actual">Rp. 29.000</span>
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
                                        <img src="{{asset('images/conan.png')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Detective Conan</p>
                                            <div class="price1">
                                                <span class="actual">Rp. 22.000</span>
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
                                        <img src="{{asset('images/minions.png')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Minions EvilL</p>
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

