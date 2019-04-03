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

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('index', 'Index@index');
    Route::resource('pages', 'Pages');
    Route::resource('users', 'Users');
    Route::resource('blocks', 'Blocks');

    Route::get('login', 'Login@index');
    Route::post('login', 'Login@login');
    Route::get('logout', 'Login@logout');
    Route::get('', 'Login@check');
});



Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
