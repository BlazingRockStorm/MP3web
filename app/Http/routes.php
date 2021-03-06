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
Route::get('/music/create','MusicController@create');
Route::post('/music/home',[
    'as'=>'music.store',
    'uses'=>'MusicController@store'
]);
Route::get('/music/show/{id}','MusicController@show');
Route::get('/music/edit/{id}','MusicController@edit');
Route::put('/music/show/{id}',[
    'as'=>'music.update',
    'uses'=>'MusicController@update'
]);
Route::delete('/music/show/{id}',[
    'as'=>'music.destroy',
    'uses'=>'MusicController@destroy'
]);
//all about artist
Route::get('/artist','ArtistController@index');
Route::get('/artist/create','ArtistController@create');
Route::get('/artist/{id}','ArtistController@show');
Route::post('/artist',[
    'as'=>'artist.store',
    'uses'=>'ArtistController@store'
]);
Route::get('/artist/{id}/edit','ArtistController@edit');
Route::put('/artist/{id}',[
    'as'=>'artist.update',
    'uses'=>'ArtistController@update'
]);
Route::delete('/artist/{id}',[
    'as'=>'artist.destroy',
    'uses'=>'ArtistController@destroy'
]);
//genre
Route::get('/genre','GenreController@index');
Route::get('/genre/{id}','GenreController@show');