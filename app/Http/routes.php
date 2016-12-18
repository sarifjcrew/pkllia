<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
  return view('home');
});

Route::resource('register', 'RegistrationPtkController');
Route::get('bukuinduk/ptk', 'BukuIndukPtkController@Ptk')->name('bukuindukptk');
Route::resource('bukuinduk', 'BukuIndukPtkController');
Route::resource('mutasi', 'MutasiPtkController');

Route::group(['prefix' => 'api'], function(){
  Route::get('ptk/all', '\App\Pkllia\Api\Ptk@GetPtk')->name('apiptkall');
  Route::post('ptk/{ptkid}/anak', '\App\Pkllia\Api\AnakPtkLiaController@store')->name('apianakptkliasave');

  Route::resource('ptk', '\App\Pkllia\Api\Ptk');
});