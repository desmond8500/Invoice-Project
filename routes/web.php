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
    return redirect()->route('admin');
    // return view('adminlte');
})->name('index');

// Vue JS
Route::get('/index', 'IndexController@adminlte')->name('adminlte');

// Laravel
Route::get('/admin', 'AdminlteController@index')->name('admin');
Route::get('/admin/clients', 'AdminlteController@clients')->name('clients');
Route::get('/admin/projets', 'AdminlteController@projets')->name('projets');
Route::get('/admin/devis', 'AdminlteController@devis')->name('devis');
Route::get('/admin/users', 'AdminlteController@users')->name('users');
Route::get('/admin/contacts', 'AdminlteController@contacts')->name('contacts');

Route::get('/admin/projetslist/{client_id?}', 'InvoicesController@projetslist')->name('projets.list');
Route::get('/admin/contactslist/{client_id?}', 'InvoicesController@contactslist')->name('contacts.list');
Route::get('/admin/devislist/{projet_id?}', 'InvoicesController@devislist')->name('devis.list');

// API
Route::get('/invoices', 'InvoicesAPIController@index');
// Route::get('/invoices/count/{data}', 'InvoicesAPIController@count');
Route::get('/invoices/list/{data}/{id?}', 'InvoicesAPIController@list');


// Infyom
Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');
Route::get('generator_builder', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@builder')->name('io_generator_builder');
Route::get('field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@fieldTemplate')->name('io_field_template');
Route::get('relation_field_template', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@relationFieldTemplate')->name('io_relation_field_template');
Route::post('generator_builder/generate', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generate')->name('io_generator_builder_generate');
Route::post('generator_builder/rollback', '\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@rollback')->name('io_generator_builder_rollback');
Route::post('generator_builder/generate-from-file','\InfyOm\GeneratorBuilder\Controllers\GeneratorBuilderController@generateFromFile')->name('io_generator_builder_generate_from_file');





// Models
Route::resource('clients', 'ClientController');
Route::resource('projets', 'ProjetController');
Route::resource('contacts', 'ContactController');
Route::resource('devis', 'DevisController');
