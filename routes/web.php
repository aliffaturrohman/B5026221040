<?php

use Illuminate\Support\Facades\Route;

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
    return view('portofolio');
})->name('/');
Route::get('file1', function () {
	return view('linktree');
})->name('file1');
Route::get('file2', function () {
	return view('bootstrapTry');
})->name('file2');
Route::get('file3', function () {
	return view('calculator');
})->name('file3');
Route::get('file4', function () {
	return view('layoutGrid');
})->name('file4');
Route::get('file5', function () {
	return view('formValidation');
})->name('file5');
Route::get('file6', function () {
	return view('cardTry');
})->name('file6');

Route::get('perkalian', 'App\Http\Controllers\DosenController@index');
Route::get('biodata', 'App\Http\Controllers\DosenController@biodata');

Route::get('showjam/{jam}', 'App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');


Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');
Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiKuliahController@nilaikuliah');
Route::get('/nilaikuliah/tambah','App\Http\Controllers\NilaiKuliahController@tambahdata');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliahController@store');

Route::get('/baju','App\Http\Controllers\BajuController@indexbaju');
Route::get('/baju/tambah','App\Http\Controllers\BajuController@tambahbaju');
Route::post('/baju/store','App\Http\Controllers\BajuController@storebaju');
Route::get('/baju/edit/{id}','App\Http\Controllers\BajuController@editbaju');
Route::post('/baju/update','App\Http\Controllers\BajuController@updatebaju');
Route::get('/baju/hapus/{id}','App\Http\Controllers\BajuController@hapusbaju');
Route::get('/baju/cari','App\Http\Controllers\BajuController@caribaju');
Route::get('/baju/view/{id}','App\Http\Controllers\BajuController@viewbaju');
