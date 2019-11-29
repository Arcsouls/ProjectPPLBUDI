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
});

Route::get('/homeadmin', 'HomeAdminController@homeadmin');
Route::get('/files', 'FileController@index');
Route::get('/files/create', 'FileController@create');
Route::get('/upload', 'UploadController@upload');
Route::get('/laporanakhir', 'LaporanAkhirController@laporanakhir');
Route::post('/upload/proses', 'UploadController@proses_upload');
Route::post('/laporanakhir/proses', 'LaporanAkhirController@proses_laporan');
Route::get('/input', 'cobaController@input');
Route::post('/proses', 'cobaController@proses');
Route::get('/input', 'MalasngodingController@input');
Route::post('/proses', 'MalasngodingController@proses');
Route::get('/upload/hapus/{id}', 'UploadController@hapus');
Route::get('/laporanakhir/hapus/{id}', 'LaporanAkhirController@hapus');
Route::get('/izin', 'IzinController@izin');
Route::post('/izin/proses', 'IzinController@proses_izin');
Route::get('/izin/hapus/{id}', 'IzinController@hapus');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/tabel', 'TabelController@index')->name('tabel');
Route::get('/dataakhir', 'AkhirController@index')->name('dataakhir');
Route::get('/tabel/tampil/{id}', 'TabelController@tampil');
Route::get('/tabel/urungkan/{id}', 'TabelController@urungkan');
Route::get('/perijinanku', 'PerijinankuController@index')->name('perijinanku');
Route::get('/perijinanku_admin', 'PerijinankuadminController@index')->name('perijinanku_admin');
Route::get('/detail/{id}', 'PerijinankuadminController@detail')->name('detail');
Route::post('/detail/proses', 'IzinController@proses_detail');
Route::put('/verifikasi/{id}', 'PerijinankuadminController@proses_detail');
