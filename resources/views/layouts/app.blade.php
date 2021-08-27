<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
    .wrap {
        margin-top: 5%;
        margin-left: 35%;

    }

    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    li {
        display: inline;
        font-size: 12px;
    }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div id="app">
        <div class="container">
            <div class="col-md-4 offset-md-4 mt-5">
                <div class="card" style="width: 20rem; height:30rem;">
                    <div class="card-header">
                        <ul>
                            <li>Hallo, <strong>{{ Auth::user()->name }}</strong></li>
                            <li style="float:right"><a href="{{ route('logout') }}">Logout</a></li>
                        </ul>

                        <ul>
                            <li>2 unpaid order</li>
                            <li><a href="{{ route('prepaid') }}">Prepaid Balance</a></li> |
                            <li><a href="{{ route('product') }}">Product Page</a></li>
                        </ul>
                    </div>
                    <main class="py-4">
                        @yield('content')
                    </main>

                </div>
            </div>
        </div>


    </div>
</body>

</html>
