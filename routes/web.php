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

Route::get('/', 'BarsController@index');

Route::get('/home', 'BarsController@index');

Route::resource('bars', 'BarsController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
