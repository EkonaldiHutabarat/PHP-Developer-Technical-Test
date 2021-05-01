<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel 8</title>

    <!-- styles tambahan -->
    <link rel="stylesheet" href="styles/styleku.css">

    <!-- styles online -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>


<body>
    <div class="header">
        <div class="menu">
            <ul>
                <li><a href=”index.html”>Home</a></li>
                <li><a href=”contact.html”>Kategori Buku</a></li>
                <li><a href=”service.html”>Pemesanan</a></li>
                <li><a href="about.html">Keranjang</a></li>
                @if (Route::has('login'))
                    @auth
                    <li style="float : right"><a href="{{ route('logout') }}" >Logout</a></li>
                    @else
                        <li style="float : right" ><a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a></li>
                        @if (Route::has('register'))
                        <li style="float : right" ><a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a></li>
                        @endif
                    @endauth
            @endif
            </ul>
        </div>
    </div>

    <div class="container">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <div>
        <div class="footer">
            Copyright by lalaproject 2018
        </div>
    </div>
</body>

</html>