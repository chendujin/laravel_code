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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'Auth\\JwtAuthController@login');
    Route::post('register', 'Auth\\JwtAuthController@register');
    Route::post('logout', 'Auth\\JwtAuthController@logout');
    Route::post('refresh', 'Auth\\JwtAuthController@refresh');
    Route::post('me', 'Auth\\JwtAuthController@me');
});
