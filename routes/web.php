<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PrepaidController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\IndexController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [IndexController::class, 'index'])->name('index');
Route::get('login', [AuthController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthController::class, 'register']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('prepaid', [PrepaidController::class, 'prepaid'])->name('prepaid');
    Route::get('product', [ProductController::class, 'product'])->name('product');
    Route::get('sukses_orders_balance', [PrepaidController::class, 'sukses_orders_balance'])->name('sukses_orders_balance');
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('homeAdmin',[PrepaidController::class,'adminHome'])->name('adminHome');
    Route::get('pay', [IndexController::class, 'pay'])->name('pay');
    Route::get('sukses_orders_product', [ProductController::class, 'sukses_orders_product'])->name('sukses_orders_product');
});

// Route::get('/product', function () {
//     return view('frontend/prouct');
// });

