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
    <form>
        <div class="card-body">
            <div class="form-group" style="margin-bottom: 20px;">
                <h5><strong>Pay your order</strong></h5>
            </div>
            <div class="form-group">
                @foreach($prepaids as $item)
                <input type="text" name="order_no" class="form-control" placeholder="Order no" value={{$item->id}}>
                @endforeach
            </div>
            <div class="form-group" style="padding-top: 30%;">
                <button type="submit" class="btn btn-primary btn-block">Pay now</button>
            </div>
        </div>
    </form>
</body>

</html>
@endsection

<div class="card-body">
