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
Route::resource('authors', 'AuthorsController', ['only' => ['index', 'show']]);
Route::resource('quotes', 'QuotesController', ['only' => ['index', 'show']]);

Route::group(['prefix' => 'api'], function()
{
    Route::resource('authenticate', 'Auth\AuthenticateController', ['only' => ['index']]);
    Route::post('authenticate', 'Auth\AuthenticateController@authenticate');
    Route::get('authenticate/user', 'Auth\AuthenticateController@getAuthenticatedUser');
});