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
            <div class="form-group" style="margin-bottom: 10px;">
                <h5><strong>Product Page</strong></h5>
            </div>
            <div class="form-group">
                <textarea  name="number" class="form-control" placeholder="Product"></textarea>
            </div>
            <div class="form-group">
                <textarea  name="value" class="form-control" placeholder="Shipping Address"></textarea>
            </div>
            <div class="form-group">
                <input type="text" name="price" class="form-control" placeholder="Price">
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
