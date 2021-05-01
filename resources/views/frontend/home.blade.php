@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
<div class="main">
        <div class="wrap">
            <div class="section group">
                <div class="cont ">
                    <h2 class="head">Rekomendasi</h2>
                    <div class="top-box">
                        <div class="col_1_of_3 span_1_of_3">
                            <a href="single.html">
                                <div class="inner_content clearfix">
                                    <div class="product_image">
                                        <img src="{{asset('template/web/images/5 cm.jpg')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">5 Cm</p>
                                            <div class="price1">
                                                <span class="actual">Rp. 80.000</span>
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
                                        <img src="{{asset('template/web/images/koala kumal.jpg')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Koala Kumal</p>
                                            <div class="price1">
                                                <span class="actual">Rp. 60.000</span>
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
                                        <img src="{{asset('template/web/images/perahu kertas.jpg')}}" alt=""/>
                                    </div>
                                    <div class="price">
                                        <div class="cart-left">
                                            <p class="title">Perahu Kertas</p>
                                            <div class="price1">
                                                <span class="actual">Rp. 75.000</span>
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
</body>
</html>
@endsection