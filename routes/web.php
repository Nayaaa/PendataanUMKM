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

Route::get('/', 'App\Http\Controllers\produk_controller@index');

Route::get('/staff', 'App\Http\Controllers\staff_controller@index');

Route::post('/staff/tambah', 'App\Http\Controllers\staff_controller@tambah');

Route::get('/staff/{id}/edit','App\Http\Controllers\staff_controller@edit');

Route::post('/staff/{id}/update','App\Http\Controllers\staff_controller@update');

Route::get('/staff/{id}/delete','App\Http\Controllers\staff_controller@delete');

Route::get('/produk', 'App\Http\Controllers\produk_controller@index');

Route::post('/produk/tambah', 'App\Http\Controllers\produk_controller@tambah');


Route::get('/produk/{id}/edit','App\Http\Controllers\produk_controller@edit');

Route::post('/produk/{id}/update','App\Http\Controllers\produk_controller@update');

Route::get('/produk/{id}/delete','App\Http\Controllers\produk_controller@delete');