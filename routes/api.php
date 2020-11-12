<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*
*
* Referensi Rest Api
* https://www.positronx.io/laravel-rest-api-with-passport-authentication-tutorial/
* https://stackoverflow.com/questions/43318310/how-to-logout-a-user-from-api-using-laravel-passport
*
*/

Route::post('register', 'PassportAuthController@register');
Route::post('login', 'PassportAuthController@login');

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'PassportAuthController@logout');
    Route::resource('competitions', 'CompetitionController');
});