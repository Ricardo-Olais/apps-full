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
    return view('welcome');
});

Route::get('/categorias', function () {
    return view('categorias');
});


Route::get('/juegos', function () {
    return view('juegos');
});




Route::get('/info/{apk}', 'AppsController@info')->name('info');
Route::get('/entretenimiento', 'AppsController@entretenimiento')->name('entretenimiento');