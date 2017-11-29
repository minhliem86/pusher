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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/data', ['as' =>'get.data', 'uses' => 'TestController@index']);
Route::post('/data', ['as' => 'post.data', 'uses' => 'TestController@postData']);

Route::get('/show', ['as' => 'show.data', 'uses' => 'TestController@showData']);
