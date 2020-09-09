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

Route::get('/1', 'TestController@one')->name('1');
Route::get('/2', 'TestController@two')->name('2');
Route::get('/3', 'TestController@three')->name('3');
Route::get('/4', 'TestController@four')->name('4');


