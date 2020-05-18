<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/my-account', function () {
    return view('my-account-main');
});

Route::get('/my-account/my-info', function () {
    return view('my-account-info');
});

Route::get('/my-account/chosen', function () {
    return view('my-account-chosen');
});

Route::get('/my-account/feedback', function () {
    return view('my-account-feedback');
});

Route::get('/my-account/my-orders', function () {
    return view('my-account-orders');
});
