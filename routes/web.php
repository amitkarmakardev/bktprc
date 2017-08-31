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

Route::group(['prefix' => 'album'], function () {
    Route::get('', 'AlbumController@index');
    Route::get('create', 'AlbumController@create');
    Route::get('{id?}', 'AlbumController@view');
    Route::post('', 'AlbumController@save');
    Route::post('upload', 'AlbumController@upload');
    Route::post('{id?}', 'AlbumController@update');
});

Route::group(['prefix' => 'post'], function () {
    Route::get('', 'PostController@index');
    Route::get('create', 'PostController@create');
    Route::post('', 'PostController@save');
    Route::delete('{slug?}', 'PostController@delete');
});

Route::group(['prefix' => 'member'], function(){
    Route::get('', 'MemberController@index');
    Route::get('create', 'MemberController@create');
    Route::get('{id?}/edit', 'MemberController@edit');
    Route::post('', 'MemberController@save');
    Route::post('{id?}', 'MemberController@update');
});

Route::group(['prefix' => 'book'], function(){
    Route::get('', 'BookController@index');
    Route::get('create', 'BookController@create');
    Route::get('{id?}/edit', 'BookController@edit');
    Route::get('issue-receive', 'IssueController@showIssueReceive');
    Route::post('issue', 'IssueController@issue');
    Route::get('{id?}/receive', 'IssueController@receive');
    Route::post('', 'BookController@save');
    Route::post('{id?}', 'BookController@update');
});

Route::group(['prefix' => '/'], function () {
    Route::get('', 'HomeController@welcome');
    Route::get('{page?}', 'HomeController@viewPage');
});

