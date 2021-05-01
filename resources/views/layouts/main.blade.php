<!DOCTYPE HTML>
<html>
<head>
    <title>Web Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="{{ asset('template/web/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href="{{ asset('template/web/css/form.css') }}" rel="stylesheet" type="text/css" media="all" />
    <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="{{ asset('template/web/js/jquery1.min.js') }}"></script>
    <!-- start menu -->
    <link href="{{ asset('template/web/css/megamenu.css') }}" rel="stylesheet" type="text/css" media="all" />
    <script type="text/javascript" src="{{ asset('template/web/js/megamenu.js') }}"></script>
    <script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
    <!--start slider -->
    <link rel="stylesheet" href="{{ asset('template/web/css/fwslider.css') }}" media="all">
    <script src="{{ asset('template/web/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('template/web/js/css3-mediaqueries.js') }}"></script>
    <script src="{{ asset('template/web/js/fwslider.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!--end slider -->
    <script src="{{ asset('template/web/js/jquery.easydropdown.js') }}"></script>
    @yield('head')
</head>


<body>

<div class="header-top">
    <div class="wrap">
        <div class="header-top-left">

        </div>
        <div class="cssmenu">
            <ul>
               <!--  <li class="active"><a href="login">Account</a></li> | -->
                <li><a href="checkout.html">Checkout</a></li> |
                <!-- <li><a href="login.html">Log In</a></li> |
                <li><a href="register.html">Sign Up</a></li> -->
                @if (Route::has('login'))
                    @auth
                    <li"><a href="{{ route('logout') }}" >Logout</a></li>
                    @else
                        <li><a href="login">Log in</a></li>
                        @if (Route::has('register'))
                        <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
            @endif
            </ul>
        </div>
        <div class="clear"></div>
    </div>
</div>

<div class="header-bottom">
    <div class="wrap">
        <div class="header-bottom-left">
            <div class="logo">
                <a href="index.html"><img src="{{ asset('template/web/images/WOPS.png') }}" alt=""/></a>
            </div>
            <div class="menu">
                <ul class="megamenu skyblue">
                    <li class="active grid"><a href="/">Home</a></li>
                    <li><a class="color4" href="/novel">Novel</a>
                    <li><a class="color5" href="/cerpen">Cerpen</a>
                    <li><a class="color6" href="/komik">Komik</a></li>
                    <li><a class="color7" href="/ensiklopedia">Ensiklopedia</a></li>
                    <li><a class="color5" href="/biografi">Biografi</a>
                    <li><a class="color6" href="/dongeng">Dongeng</a></li>
                </ul>
            </div>
        </div>
        <div class="header-bottom-right">
            <div class="search">
                <input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="Subscribe" id="submit" name="submit">
                <div id="response"> </div>
            </div>
            <div class="tag-list">
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c1" href="#"> </a>
                    </li>
                </ul>
                <ul class="icon1 sub-icon1 profile_img">
                    <li><a class="active-icon c2" href="#"> </a>
                    </li>
                </ul>
                <ul class="last"><li><a href="#">Cart(0)</a></li></ul>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

@yield('content')

<div class="footer">
    <div class="footer-top">
        <div class="wrap">
            <div class="section group example">
                <div class="col_1_of_2 span_1_of_2">
                    <ul class="f-list">
                        <li><img src="{{ asset('template/web/images/2.png') }}"><span class="f-text">Free Ongkos Kirim</span><div class="clear"></div></li>
                    </ul>
                </div>
                <div class="col_1_of_2 span_1_of_2">
                    <ul class="f-list">
                        <li><img src="{{ asset('template/web/images/3.png') }}"><span class="f-text">083123491355</span><div class="clear"></div></li>
                    </ul>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="wrap">
            <div class="f-list2">
                <ul>
                    <li class="active"><a href="/about">About Us</a></li> |
                    <li><a href="/contact">Contact Us</a></li>
                </ul>
            </div>
            <div class="clear"></div>
        </div>
    </div>
</div>
</body>
</html>
