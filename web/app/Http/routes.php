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
    Route::get('category/{category}/{brand}', ['as' => 'catalog.brand', 'uses' => 'Catalog@brand']);
    Route::get('category/{category}', ['as' => 'catalog.brand', 'uses' => 'Catalog@category']);
    Route::get($_SERVER['REQUEST_URI'], ['as' => 'index', 'uses' => 'Index@index']);
    Route::get(strtok($_SERVER['REQUEST_URI'], '?'), ['as' => 'index', 'uses' => 'Index@index']);
}

/*
Route::get('/', function () {
    return view('index');
    // return view('welcome');
});
*/
Route::auth();

Route::get('/home', 'HomeController@index');
