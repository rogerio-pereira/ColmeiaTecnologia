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
/*
 * AUTH
 */

//Sistema
Route::group([
                'domain' => 'sistema.'.str_replace('http://','',env('APP_URL')),
                'namespace' => 'Sistema'
            ], function() 
{
    //Auth
    Route::get('login', 'Auth\LoginController@showLoginForm');
    Route::post('login', 'Auth\LoginController@login');
    Route::post('logout', 'Auth\LoginController@logout');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
    Route::get('register', 'Auth\RegisterController@showRegistrationForm');
    Route::post('register', 'Auth\RegisterController@register');

    Route::group(['middleware' => 'system.auth'], function(){
        Route::get('/', 'HomeController@index');
        Route::get('/home', 'HomeController@index');
    });
});


Auth::routes();

/*
 * PAINEL
 */
Route::group([
                'domain' => 'painel.'.str_replace('http://','',env('APP_URL')),
                'namespace' => 'Painel',
                'middleware' => 'auth'
            ], function() 
{
    Route::get('/', 'PainelController@index');
    Route::resource('banners', 'BannerController');
    Route::resource('servicos', 'ServiceController');
    Route::resource('portifolios', 'PortfolioController');

    Route::get('upload', 'UploadController@index');
    Route::post('upload/upload', 'UploadController@upload')->name('upload.upload');
    
    Route::resource('categorias_post', 'PostCategoryController');
    Route::resource('posts', 'PostController');
});

/*
 * BLOG
 */
Route::group([
                'domain' => 'blog.'.str_replace('http://','',env('APP_URL')),
                'namespace' => 'Blog'
            ], function() 
{
    Route::get('/', 'BlogController@index')->name('blog');
    Route::get('autor/{name}', 'BlogController@author')->name('author');
    Route::get('{category}', 'BlogController@category')->name('category');
    Route::get('{category}/{title}', 'BlogController@post')->name('post');
    Route::post('busca', 'BlogController@search')->name('busca');
    
    Route::post('/subscription/create', 'SubscriptionController@create')->name('subscription.create');
    Route::get('/subscription/destroy/{id}', 'SubscriptionController@destroy')->name('subscription.destroy');
});

/*
 * SITE
 */
Route::group([
                'domain' => str_replace('http://','',env('APP_URL')),
                'namespace' => 'Site'
            ], function() 
{
    Route::get('/', 'HomeController@index')->name('index');
    Route::get('/home', 'HomeController@index')->name('home');
    Route::post('/contato/send', 'ContatoController@send')->name('contato.send');
});