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

Route::get('/test', function () {
    return view('welcome');
})->name('test');

Route::get('/', function () {
    return view('landing');
})->name('home');

Route::get('/my-account', 'MusicInsrumentsController@cabinet')->name('cabinet');
Route::get('/likes', 'MusicInsrumentsController@likes')->name('likes');
Route::get('/cart', 'MusicInsrumentsController@cart')->name('cart');

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
