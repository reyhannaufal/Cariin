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

Route::post('register', 'UserController@register');
Route::post('login', 'UserController@login');

Route::middleware('auth:api')->group(function() {
    Route::post('logout', 'UserController@logout');

    Route::prefix('/user')->group(function() {
        Route::get('/details', 'UserController@details');
        Route::get('/{id}/details', 'UserController@detailsById');
        Route::get('/teams', 'UserController@showTeams');
        Route::get('/{id}/teams', 'UserController@showTeamsById');
        Route::get('/threads', 'UserController@showThreads');
        Route::get('/{id}/threads', 'UserController@showThreadsById');
    });
    
    Route::prefix('/categories')->middleware(['admin',])->group(function() {
        Route::post('/store', 'CategoryController@store');
        Route::put('/edit/{id}', 'CategoryController@update');
        Route::delete('/delete/{id}', 'CategoryController@delete');
    });

    Route::prefix('/categories')->group(function() {
        Route::get('/index', 'CategoryController@index');
        Route::get('/{id}', 'CategoryController@show');
        Route::get('/{id}/competitions', 'CategoryController@competitionsById');
    });

    Route::prefix('/competitions')->middleware(['admin',])->group(function() {
        Route::post('/store', 'CompetitionController@store');
        Route::put('/edit/{id}', 'CompetitionController@update');
        Route::delete('/delete/{id}', 'CompetitionController@delete');
    });

    Route::prefix('/competitions')->group(function() {
        Route::get('/index', 'CompetitionController@index');
        Route::get('/{id}', 'CompetitionController@show');
        Route::get('/{id}/teams', 'CompetitionController@teamsById');
    });


    Route::prefix('/teams')->group(function() {
        Route::get('/index', 'TeamController@index');
        Route::get('/{id}', 'TeamController@show');
        Route::get('/{id}/threads', 'TeamController@threadsById');
        Route::post('/store', 'TeamController@store');
        Route::put('/edit/{id}', 'TeamController@update');
        Route::delete('/delete/{id}', 'TeamController@delete');
    });

    Route::prefix('/threads')->group(function() {
        Route::get('/index', 'ThreadController@index');
        Route::get('/{id}', 'ThreadController@show');
        Route::get('/{id}/replies', 'ThreadController@repliesById');
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

Route::any('{any}', function(){
    return response()->json([
        'message'   => 'Page Not Found',
    ], 404);
})->where('any', '.*');