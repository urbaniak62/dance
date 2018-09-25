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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('membre/membre', 'MembreController@membre')->name('membre/membre');

route::get('admin/admin', 'AdminController@index')->name('adminIndex');
Route::post('admin/admin', 'AdminController@create')->name('adminCreate');












