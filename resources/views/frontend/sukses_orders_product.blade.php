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
    <form action="{{ route('payproduct') }}" method="get">
        <div class="card-body">
            <div class="form-group">
                <h5><strong>sukses</strong></h5>
            </div>
            <ul class="list-group">
                @foreach ($products as $item)
                <li class="group-item d-flex justify-content-between align-items-center">
                    Order no.
                    <span class="badge badge-pill">{{$item->id}}</span>
                </li>
                <li class="group-item d-flex justify-content-between align-items-center">
                    Total
                    <span class="badge badge-pill">Rp {{$item->price}}</span>
                </li>
                <li>
                    <p>
                    {{$item->name_product}} that costs {{$item->price}} will be shipped to : {{$item->shipping_address}} only after you pay
                    </p>
                </li>

                @endforeach
            </ul>
            </div>
            <div class="form-group" style="padding-top: 20%;">
                <button type="submit" class="btn btn-primary btn-block">Pay Now</button>
            </div>
        </div>
    </form>
</body>

</html>
@endsection

<div class="card-body">
