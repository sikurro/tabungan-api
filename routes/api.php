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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'auth:api'
], function () {
    Route::get('/user', function(){
        return response()->json(array(
            'user' => 'sikurro',
            'token' => '@ExampleToken'
        ));
    });
});

Route::get('/info', function(){
    return response()->json(array(
        'app_name' => 'tabungan_api',
        'version' => '1.0.0',
    ));
});