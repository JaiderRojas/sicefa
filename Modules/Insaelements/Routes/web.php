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

Route::prefix('insaelements')->group(function() {
    Route::get('/index', 'InsaelementsController@index');
    
    Route::get('/SolicitarPrestamo', 'SolicitarController@index')->name('insaelements.general.Solicitar');
    
    Route::post('/ajaxPeopleByDocument', 'SolicitarController@ajaxPeopleByDocumentPost')->name('insaelements.general.ajaxPeopleByDocument');

 
	Route::post('/ajaxElementByCode', 'SolicitarController@ajaxElementByCodePost')->name('insaelements.general.Solicitar.ajaxElementByCode');

    Route::get('/InvenElements', 'InventarioController@index');


 
});
