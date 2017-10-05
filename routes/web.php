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
    return view('inicial');
});


Route::get('/registo', function () {
    return view('registo_user');
})->name('registo');

Route::get('/dados_user', function () {
    return view('dados_user');
})->name('dados_user');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
