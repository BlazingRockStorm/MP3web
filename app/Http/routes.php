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

Route::controllers([
    'auth'=>'Auth\AuthController',
    'password'=>'Auth\PasswordController'
]);

Route::auth();

Route::get('/home', 'HomeController@index');

//all about music
Route::get('/music/home','MusicController@index');
Route::get('/music/show/{id}','MusicController@show');
Route::get('/music/create','MusicController@create');
Route::post('/music/home',[
    'as'=>'music.store',
    'uses'=>'MusicController@store'
]);