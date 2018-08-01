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
    return view('default');
});
//request to shorten url
Route::post('create', 'UrlController@create');
//request to access url that is shortened
Route::get('/{id}', 'UrlController@show');
