<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

$admin_prefix = 'admin';

Route::group(['prefix' => $admin_prefix, 'namespace' => 'Admin'], function(){
    Route::get('index', 'Index@index');
    Route::resource('pages', 'Pages');
    Route::resource('users', 'Users');
    Route::resource('news', 'News');
    Route::resource('articles', 'Articles');
    Route::resource('feedback', 'Feedback');
    Route::resource('sliders', 'Sliders');
    Route::get('blocks/refresh', ['as' => 'admin.blocks.refresh', 'uses' => 'Blocks@refresh']);
    Route::resource('blocks', 'Blocks');
    Route::get('products/sync', ['as' => 'admin.products.sync', 'uses' => 'Products@sync']);
    Route::resource('products', 'Products');

    Route::get('login', 'Login@index');
    Route::post('login', 'Login@login');
    Route::get('logout', 'Login@logout');
    Route::get('', 'Login@check');
});

if(!strpos($_SERVER['REQUEST_URI'], $admin_prefix))
{
    session_start();
    Route::get('category/{category}/{brand?}', 'Catalog@category');
    Route::post('category/{category}/{brand?}', 'Catalog@catalog_list');
    Route::get('brand/{brand}', 'Catalog@brand');
    Route::get('articles/{url}', ['as' => 'articles.show', 'uses' => 'Articles@show']);
    Route::get('news/{url}', ['as' => 'news.show', 'uses' => 'News@show']);
    Route::post('cart/add', 'Cart@add');
    Route::get($_SERVER['REQUEST_URI'], ['as' => 'index', 'uses' => 'Index@index']);
    Route::get(strtok($_SERVER['REQUEST_URI'], '?'), ['as' => 'index', 'uses' => 'Index@index']);
    Route::get('cart', 'Cart@index');
    Route::post('bellLight', 'Call@send');
    Route::get('search', 'Catalog@search');
    Route::get('news', ['as' => 'news', 'uses' => 'News@index']);
    Route::get('articles', ['as' => 'articles', 'uses' => 'Articles@index']);
}

/*
Route::get('/', function () {
    return view('index');
    // return view('welcome');
});
*/
Route::auth();

Route::get('/home', 'HomeController@index');
include 'helpers.php';