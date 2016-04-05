<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('kebersihan', 'kebersihan_aja@index');
Route::get('kebersihan/{nama}', 'kebersihan_aja@profile');

Route::get('barang', ['as'=> 'barang.index', 'uses' => 'BarangController@index']);
Route::get('barang/buat', ['as' => 'barang.buat','uses' => 'BarangController@buat']);
Route::match(array('PUT','PATCH'),'barang/{id}', ['as' => 'barang.update','uses' => 'BarangController@update']);
Route::post('barang', ['as' => 'barang.simpan','uses' => 'BarangController@simpan']);
Route::delete('barang/{id}', ['as' => 'barang.hapus', 'uses' => 'BarangController@hapus']);
Route::get('barang/{id}/edit', ['as' => 'barang.edit', 'uses' => 'BarangController@edit']);
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
