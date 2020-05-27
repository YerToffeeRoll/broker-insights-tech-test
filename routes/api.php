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


Route::get('policies', function() {
    // If the Content-Type and Accept headers are set to 'application/json',
    // this will return a JSON structure. This will be cleaned up later.
    return Policy::all();
});

Route::get('policies/{id}', function($id) {
    return Policy::find($id);
});

Route::post('policies', function(Request $request) {
    return Policy::create($request->all);
});

Route::put('policies/{id}', function(Request $request, $id) {
    $policy = Policy::findOrFail($id);
    $policy->update($request->all());

    return $policy;
});

Route::delete('policies/{id}', function($id) {
    Policy::find($id)->delete();

    return 204;
});
