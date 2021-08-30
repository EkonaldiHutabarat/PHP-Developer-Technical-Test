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
    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('homeAdmin',[PrepaidController::class,'adminHome'])->name('adminHome');

    //Prepaid balance
    Route::get('prepaid', [PrepaidController::class, 'prepaid'])->name('prepaid');
    Route::post('prepaid', [PrepaidController::class, 'Order']);
    Route::get('paybalance', [PrepaidController::class, 'payNow'])->name('paybalance');


    //Product Page
    Route::get('product', [ProductController::class, 'product'])->name('product');
    Route::post('product', [ProductController::class, 'productOrder']);
    Route::get('payproduct', [ProductController::class, 'payNow'])->name('payproduct');






});


