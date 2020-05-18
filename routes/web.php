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

Route::get('/sales', 'MusicInsrumentController@sales')->name('sales');
Route::get('/guitars', 'MusicInsrumentController@sales')->name('guitars');
Route::get('/keyboards', 'MusicInsrumentController@sales')->name('keyboards');
Route::get('/winds', 'MusicInsrumentController@sales')->name('winds');
Route::get('/bows', 'MusicInsrumentController@sales')->name('bows');
Route::get('/percussions', 'MusicInsrumentController@sales')->name('percussions');
Route::get('/accessories', 'MusicInsrumentController@sales')->name('accessories');
Route::get('/brands', 'MusicInsrumentController@sales')->name('brands');

Route::get('/search', 'MusicInsrumentController@search')->name('search');
