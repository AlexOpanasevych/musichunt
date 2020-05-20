<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/test', function () {
    return view('welcome');
})->name('test');

Route::get('/my-account/my-info', function () {
    return view('my-account-info');
});

Route::get('/my-account/chosen', 'MusicInsrumentController@chosen');

Route::get('/my-account/feedback', function () {
    return view('my-account-feedback');
});

Route::get('/my-account/my-orders', function () {
    return view('my-account-orders');
});

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/my-account', 'MusicInsrumentController@cabinet')->name('cabinet')->middleware('auth');

Route::get('/likes', 'MusicInsrumentController@likes')->name('likes')->middleware('auth');
Route::get('/cart', 'MusicInsrumentController@cart')->name('cart');

Route::get('/sales', 'MusicInsrumentController@sales')->name('sales');
Route::get('/guitars', ['uses' => 'MusicInsrumentController@getByName', 'name' => 'guitars', 'title' => 'Гітари'])->name('guitars');
Route::get('/keyboards', ['uses' => 'MusicInsrumentController@getByName', 'name' => 'keyboards', 'title' => 'Клавішні'])->name('keyboards');
Route::get('/winds', ['uses' => 'MusicInsrumentController@getByName', 'name' => 'winds', 'title' => 'Духові'])->name('winds');
Route::get('/bows', ['uses' => 'MusicInsrumentController@getByName', 'name' => 'bows', 'title' => 'Смичкові'])->name('bows');
Route::get('/percussions', ['uses' => 'MusicInsrumentController@getByName', 'name' => 'percussions', 'title' => 'Перкусія'])->name('percussions');
Route::get('/accessories', ['uses' => 'MusicInsrumentController@getByName', 'name' => 'accessories', 'title' => 'Аксесуари'])->name('accessories');
Route::get('/brands', 'MusicInsrumentController@brands')->name('brands');
Route::get('/news', 'MusicInsrumentController@news')->name('news');
Route::get('/search', 'MusicInsrumentController@search')->name('search');


Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('/register', function(){
    return view('register');
})->name('register');

Route::post('/login', 'SessionController@store');
Route::post('/register', 'RegistrationController@store');
Route::get('/logout', 'SessionController@destroy');

Route::get('/chosen/cansel/{id}', 'MusicInsrumentController@canselChoose')->name('cansel-choose');

Route::post('/my-account/my-info/change-password', 'SessionController@changePassword')->name('change-password');
Route::get('/login/password-reset', function () {
    return view('password_reset');
})->name('password-reset');
