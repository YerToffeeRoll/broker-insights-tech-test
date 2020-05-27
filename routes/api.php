<?php

use Illuminate\Http\Request;
use App\Policy;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


<<<<<<< HEAD
Route::get('policies', 'PolicyController@index');
Route::get('policies/{policy}', 'PolicyController@show');
Route::post('policies', 'PolicyController@store');
Route::put('policies/{policy}', 'PolicyController@update');
Route::delete('policies/{policy}', 'PolicyController@delete');
=======
Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{id}', 'ArticleController@update');
Route::delete('articles/{id}', 'ArticleController@delete');
>>>>>>> 0ac54e610341dbbbf2c92c6149f991ece174dd60
