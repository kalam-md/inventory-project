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
})->name('/');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/barang_masuk', 'BarangMasukController');
Route::resource('/barang_keluar', 'BarangKeluarController');
Route::get('/report', 'ReportBarangController@index')->name('report');
