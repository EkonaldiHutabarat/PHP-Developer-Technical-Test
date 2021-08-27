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
            <div class="form-group" style="margin-bottom: 5px;">
                <h5><strong>notif sukses</strong></h5>
            </div>
            <table class="table">
                <tbody>
                    <tr>
                        <td>Order no.</td>
                        <td></td>
                        <td>123456789</td>
                    </tr>
                    <tr>
                        <td>Total</td>
                        <td></td>
                        <td>50.000</td>
                    </tr>

                </tbody>
            </table>
            <div class="form-group" style="padding-top: 50%;">
                <button type="submit" class="btn btn-primary btn-block">Pay No</button>
            </div>
        </div>
    </form>
</body>

</html>
@endsection

<div class="card-body">
