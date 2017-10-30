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


Route::get('/bars', 'BarsController@index');

Route::get('/home', 'HomeController@index');

Route::resource('bars', 'BarsController');

Route::resource('home', 'HomeController');

/*Route::get('bars/{id}/islikedbyme', 'BarsController@isLikedByMe');

Route::post('bar/like', 'API\PostController@like');*/

Auth::routes();

