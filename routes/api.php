<?php

use Illuminate\Http\Request;

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
// for gui - to know what article will update
Route::get('articles/getAll2', 'API\ArticlesController@getAllArticles2');
Route::get('articles/get2/{id}', 'API\ArticlesController@getArticle2');

Route::post('register','API\AuthController@register');
Route::post('login','API\AuthController@login');

Route::middleware('jwt.verify')->group(function(){

   //Get user information
   Route::get('user','API\AuthController@getAuthenticatedUser');
   Route::get('logout','API\AuthController@logout');

   //articles CRUD routes
    Route::get('articles/getAll', 'API\ArticlesController@getAllArticles');
    Route::get('articles/get/{id}', 'API\ArticlesController@getArticle');
    Route::post('articles/insert', 'API\ArticlesController@insert');
    Route::patch('articles/{id}/update', 'API\ArticlesController@update');
    Route::delete('articles/{id}/delete', 'API\ArticlesController@delete');



});