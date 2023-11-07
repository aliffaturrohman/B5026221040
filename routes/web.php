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
    return view('index');
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

