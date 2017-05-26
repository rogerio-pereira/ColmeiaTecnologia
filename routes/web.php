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

Route::group([
                'domain' => 'blog.'.str_replace('http://','',env('APP_URL')),
                'namespace' => 'Blog'
            ], function() 
{
    Route::get('/', 'BlogController@index')->name('blog');
    Route::post('/newsletter/create', 'Newsletter@create')->name('newsletter.create');
});

Route::group([
                'domain' => str_replace('http://','',env('APP_URL')),
                'namespace' => 'Site'
            ], function() 
{
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/contato/send', 'ContatoController@send')->name('contato.send');
});

Auth::routes();