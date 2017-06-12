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

Route::group(['prefix' => '/'], function () {
    Route::get('', 'HomeController@welcome');
});

Route::group(['prefix' => 'album'], function () {
    Route::get('', 'AlbumController@index');
    Route::get('create', 'AlbumController@create');
    Route::get('{id?}', 'AlbumController@view');
    Route::post('{id?}', 'AlbumController@update');
    Route::post('', 'AlbumController@save');
});
