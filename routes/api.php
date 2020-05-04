<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});



Route::resource('clients', 'ClientAPIController');
Route::resource('projets', 'ProjetAPIController');
Route::resource('contacts', 'ContactAPIController');
Route::resource('users', 'UserAPIController');
Route::resource('devis', 'DevisAPIController');


Route::resource('projet_categories', 'Projet_categorieAPIController');

Route::resource('devis_inputs', 'Devis_inputAPIController');