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

Route::group(['prefix' => 'almacen','middleware' => ['auth']],function() {
    Route::get('/', 'AlmacenController@index');
    // Route::get('/', 'AlmacenController@index')->middleware(['role:secretaria']);
    Route::resource('form','FormController');
});