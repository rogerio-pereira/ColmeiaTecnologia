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

Auth::routes();

Route::get('/', 'Site\HomeController@index')->name('/');
Route::get('/home', 'Site\HomeController@index')->name('home');
Route::post('/contato/send', 'Site\\ContatoController@send')->name('contato.send');
