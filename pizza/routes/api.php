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



Route::group(['prefix' => 'v1'], function () {

    Route::group(['prefix' => 'pizzas'], function () {

        Route::get('/', ['as' => 'api.pizzas.index','uses' => 'DTPizzasController@apiIndex']);

//        Route::get('/create', ['as' => 'api.pizzas.create','uses' => 'DTPizzasController@create']);
        Route::post('/create', [ 'uses' => 'DTPizzasController@apiStore']);

        Route::group(['prefix' => '{id}'], function () {

//            Route::get('/edit', ['as' => 'api.pizzas.edit', 'uses' => 'DTPizzasController@edit']);
            Route::post('/edit', ['uses' => 'DTPizzasController@apiUpdate']);

            Route::get('/', ['uses' => 'DTPizzasController@apiShow']);
            Route::delete('/', ['as' => 'front-end.pizzas.delete', 'uses' => 'DTPizzasController@apiDestroy']);

        });
    });
});

