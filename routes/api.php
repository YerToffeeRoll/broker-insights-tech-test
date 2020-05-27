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


Route::get('policies', 'PolicyController@index');
Route::get('policies/{policy}', 'PolicyController@show');
Route::post('policies', 'PolicyController@store');
Route::put('policies/{policy}', 'PolicyController@update');
Route::delete('policies/{policy}', 'PolicyController@delete');
