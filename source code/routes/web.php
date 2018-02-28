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


Route::resource('charts','ChartsController');
Route::resource('tables','TablesController');
Route::resource('forms','FormsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');