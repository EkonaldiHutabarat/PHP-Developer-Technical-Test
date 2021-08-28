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
            <div class="form-group" style="margin-bottom: 20px;">
                <h5><strong>Prepaid Balance</strong></h5>
            </div>
            <div class="form-group">
                <input type="text" name="mobile_number" class="form-control" placeholder="Mobile Number">
            </div>
            <!-- <div class="form-group"> -->
            <!-- <select class="form-control" id="exampleFormControlSelect1">
                <option name="value">10.000</option>
                <option name="value">50.000</option>
                <option name="value">100.000</option>
            </select> -->
            <div class="form-group">
                <input type="text" name="value" class="form-control" placeholder="Value">
            </div>
            <!-- </div> -->
            <div class="form-group" style="padding-top: 30%;">
                <button type="submit" class="btn btn-primary btn-block">Submit</button>
            </div>
        </div>
    </form>
</body>

</html>
@endsection

<div class="card-body">
