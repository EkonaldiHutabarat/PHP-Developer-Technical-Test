@extends('layouts.main')
@section('content')

    <!-- start slider -->
    <div id="fwslider">
        <div class="slider_container">
            <div class="slide">
                <!-- Slide image -->
                <img src="{{asset('template/web/images/banner.jpg')}}" alt=""/>
                <!-- /Slide image -->
                <!-- Texts container -->
                <div class="slide_content">
                    <div class="slide_content_wrap">
                        
                    </div>
                </div>
                <!-- /Texts container -->
            </div>
            <!-- /Duplicate to create more slides -->
            <div class="slide">
                <img src="{{asset('template/web/images/banner1.jpg')}}" alt=""/>
                <div class="slide_content">

                </div>
            </div>
            <!--/slide -->
        </div>
        <div class="timers"></div>
        <div class="slidePrev"><span></span></div>
        <div class="slideNext"><span></span></div>
    </div>
    <!--/slider -->

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

@endsection
