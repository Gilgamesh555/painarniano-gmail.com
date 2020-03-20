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
    Route::resource('sorter','SorterController');
    Route::resource('property','PropertyController');
    Route::resource('unity','UnityController');
    Route::resource('budget-code','BudgetCodeController');
    Route::resource('funding-source','FundingSourceController');
    Route::resource('financing-agency','FinancingAgencyController');
    Route::resource('program-activity','ProgramActivityController');
    Route::resource('program-structure','ProgramStructureController');
    Route::resource('material-order','MaterialOrderController');
    Route::resource('validate-request','ValidateRequestController');
});