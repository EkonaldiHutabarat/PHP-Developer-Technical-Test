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
    <form action="{{ route('paybalance') }}" method="get">
        @csrf
        <div class="card-body">
            <div class="form-group">
                <h5><strong>Sukses</strong></h5>
            </div>
            <ul class="list-group">
            @foreach ($prepaids as $item)
                <li class="group-item d-flex justify-content-between align-items-center">
                    Order no.
                    <span class="badge badge-pill">{{$item->id}}</span>
                </li>
                <li class="group-item d-flex justify-content-between align-items-center">
                    Total
                    <span class="badge badge-pill">Rp {{$item->value}}</span>
                </li>
                <li>
                <p>
                    Your mobile phone number {{$item->mobile_number}} will receive Rp {{$item->value}}
                </p>
                </li>

            @endforeach
            </ul>
            <div class="form-group" style="padding-top: 20%;">
                <button type="submit" class="btn btn-primary btn-block">Pay Now</button>
                <!-- <a class="btn btn-primary btn-block" href="paynow/{{$item->id}}">Pay Now</a> -->
            </div>

        </div>
    </form>
</body>

</html>
@endsection

<div class="card-body">
