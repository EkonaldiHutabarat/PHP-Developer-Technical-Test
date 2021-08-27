<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="col-md-4 offset-md-4 mt-5">
            <div class="card" style="width: 20rem; height:30rem;">
                <form action="{{ route('login') }}" method="post">
                    @csrf
                    <div class="card-body">
                        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-@endsection <ul>
                                    @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                    @endforeach
                                    </ul>
                        </div>
                        @endif
                        @if (Session::has('success'))
                        <div cla@endsection @endif @if (Session::has('error')) <div class="alert alert-danger">
                            {{ Session::get('error') }}
                        </div>
                        @endif
                        <div class="form-group" style="padding-bottom:3px" ;>
                            <h5><strong>Login</strong></h5>
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>

                        <p class="text-center" style="padding-top: 10%;"><a href="{{ route('register') }}">Register</a>
                        </p>
                    </div>

                </form>
            </div>
        </div>
    </div>
</body>

</html>
