<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserLoginController;
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

Route::group(['middleware' =>['guest']], function(){
    Route::get('/',[HomeController::class, 'show'])
        ->name("home");
    Route::get('carTop',[HomeController::class, 'showCarTop'])
        ->name("carTop");
    Route::get('carProductList',[HomeController::class, 'showCarList'])
        ->name("carProductList");
    Route::post('checkUserLogin','App\Http\Controllers\UserLoginController@checkLogin')
        ->name("checkUserLogin");
    Route::get('userLogin','App\Http\Controllers\UserLoginController@show')
        ->name("login");
    Route::get('userRegister','App\Http\Controllers\UserLoginController@showRegister')
        ->name('userRegister');
    Route::get('carProductRegister','App\Http\Controllers\ProductRegisterController@showCar')
        ->name('carProductRegister');
    Route::post('doUserRegister', 'App\Http\Controllers\UserLoginController@register')
        ->name('register');
    Route::post("doCarProductRegister",'App\Http\Controllers\ProductRegisterController@registerProduct')
        ->name('registerCarProduct');
});

Route::group(['middleware' => ['auth']], function() {
    Route::get('home',[HomeController::class, 'show'])
        ->name("home");
    Route::get('carProductList',[HomeController::class, 'showList'])
        ->name("carProductList");
    Route::get('userLogout',[UserLoginController::class,'logout'])
        ->name('userLogout');
    Route::get('carProductDetail/{id}',[HomeController::class, 'showCarDetail'])
        ->name("carProductDetail");
    Route::post('checkCarProductBid',[HomeController::class, 'checkCarProductBid'])
        ->name('checkCarProductBid');
    Route::get('showCarProductBid',[HomeController::class, 'showCarProductBid'])
        ->name('showCarProductBid');
});
