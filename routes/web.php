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



Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');
// Route::get('/index', 'IndexController@index')->middleware('verified')->name('index');
Route::get('/', 'IndexController@adminlte')->middleware('verified')->name('adminlte');
