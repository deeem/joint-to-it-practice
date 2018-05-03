<?php

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('can:dashboard');
Route::get('/charts', 'HomeController@charts')->name('charts')->middleware('can:charts');
Route::get('/tables', 'HomeController@tables')->name('tables')->middleware('can:tables');
Route::get('/navbar', 'HomeController@navbar')->name('navbar')->middleware('can:components');
Route::get('/cards', 'HomeController@cards')->name('cards')->middleware('can:components');
Route::get('/map', 'HomeController@map')->name('map')->middleware('can:map');
Route::get('/store-marker', 'HomeController@storeMarker')->name('marker')->middleware('can:map');
Route::get('/get-markers', 'HomeController@getMarkers')->name('get-markers')->middleware('can:map');
