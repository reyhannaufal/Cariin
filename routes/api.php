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

Route::middleware('auth:api')->group(function() {
    Route::post('/user/details', 'PassportAuthController@details');
    Route::post('logout', 'PassportAuthController@logout');
    
    Route::prefix('/competitions')->middleware(['admin',])->group(function() {
        Route::get('/index', 'CompetitionController@index');
        Route::get('/{id}', 'CompetitionController@show');
        Route::post('/store', 'CompetitionController@store');
        Route::put('/edit/{id}', 'CompetitionController@update');
        Route::delete('/delete/{id}', 'CompetitionController@delete');
    });

    Route::prefix('/categories')->middleware(['admin',])->group(function() {
        Route::get('/index', 'CategoryController@index');
        Route::get('/{id}', 'CategoryController@show');
        Route::post('/store', 'CategoryController@store');
        Route::put('/edit/{id}', 'CategoryController@update');
        Route::delete('/delete/{id}', 'CategoryController@delete');
    });

    Route::prefix('/teams')->group(function() {
        Route::get('/index', 'TeamController@index');
        Route::get('/{id}', 'TeamController@show');
        Route::post('/store', 'TeamController@store');
        Route::put('/edit/{id}', 'TeamController@update');
        Route::delete('/delete/{id}', 'TeamController@delete');
    });

    Route::prefix('/threads')->group(function() {
        Route::get('/index', 'ThreadController@index');
        Route::get('/{id}', 'ThreadController@show');
        Route::post('/store', 'ThreadController@store');
        Route::put('/edit/{id}', 'ThreadController@update');
        Route::delete('/delete/{id}', 'ThreadController@delete');
    });

    Route::prefix('/replies')->group(function() {
        Route::get('/index', 'ReplyController@index');
        Route::get('/{id}', 'ReplyController@show');
        Route::post('/store', 'ReplyController@store');
        Route::put('/edit/{id}', 'ReplyController@update');
        Route::delete('/delete/{id}', 'ReplyController@delete');
    });


});

Route::fallback(function() {
    return response()->json([
        'message' => 'Page Not Found'], 404);
});