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

Route::group([
    'namespace' => 'Api',    
], function(){


    Route::post('/register', 'AuthController@register');
    Route::post('/login', 'AuthController@login');

    Route::group([
        'middleware' => 'auth:api'
    ],function(){

        // Auth
        Route::get('/info_user', 'AuthController@user');
        Route::get('/logout', 'AuthController@logout');

    });

});

Route::middleware('auth:api')->get('/get_user', 'Api\AuthController@user');

Route::get('/info', function(){
    return response()->json(array(
        'app_name' => 'tabungan_api',
        'version' => '1.0.0',
    ));
});