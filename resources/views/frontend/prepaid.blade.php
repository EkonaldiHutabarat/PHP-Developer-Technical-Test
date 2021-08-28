@extends('layouts.app')
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
    <form method="post" action="{{ route('prepaid') }}">
        @csrf
        <div class="card-body">
            <div class="form-group" style="margin-bottom: 10px;">
                <h5><strong>Prepaid Balance</strong></h5>
            </div>
            <div class="form-group">
                <input name="mobile_number" class="form-control" placeholder="Mobile Number"></input>
            </div>
            <div class="form-group">
                <input name="value" class="form-control" placeholder="Value"></input>
            </div>
            <div class="form-group" style="padding-top: 10%;">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
        </div>
    </form>
</body>
</html>
@endsection

<div class="card-body">
