<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/**
 * Routes for admin role only
 */


Route::group(['prefix' => 'admin', 'middleware' => 'check-role-super-admin'], function () {

    Route::group(['prefix' => 'cheeses'], function () {

        Route::get('/', ['as' => 'app.cheeses.index','uses' => 'DTCheesesController@adminIndex']);

        Route::get('/create', ['as' => 'app.cheeses.create','uses' => 'DTCheesesController@adminCreate']);
        Route::post('/create', ['as' => 'app.cheeses.store', 'uses' => 'DTCheesesController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.cheeses.edit', 'uses' => 'DTCheesesController@adminEdit']);
            Route::post('/edit', ['as' => 'app.cheeses.update', 'uses' => 'DTCheesesController@adminUpdate']);

            Route::get('/', ['as' => 'app.cheeses.show', 'uses' => 'DTCheesesController@adminShow']);
            Route::delete('/', ['as' => 'app.cheeses.delete', 'uses' => 'DTCheesesController@adminDestroy']);

        });
    });

    Route::group(['prefix' => 'ingredients'], function () {

        Route::get('/', ['as' => 'app.ingredients.index','uses' => 'DTIngredientsController@adminIndex']);

        Route::get('/create', ['as' => 'app.ingredients.create','uses' => 'DTIngredientsController@adminCreate']);
        Route::post('/create', ['as' => 'app.ingredients.store', 'uses' => 'DTIngredientsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.ingredients.edit', 'uses' => 'DTIngredientsController@adminEdit']);
            Route::post('/edit', ['as' => 'app.ingredients.update', 'uses' => 'DTIngredientsController@adminUpdate']);

            Route::get('/', ['as' => 'app.ingredients.show', 'uses' => 'DTIngredientsController@adminShow']);
            Route::delete('/', ['as' => 'app.ingredients.delete', 'uses' => 'DTIngredientsController@adminDestroy']);

        });
    });

    Route::group(['prefix' => 'pads'], function () {

        Route::get('/', ['as' => 'app.pads.index','uses' => 'DTPadsController@adminIndex']);

        Route::get('/create', ['as' => 'app.pads.create','uses' => 'DTPadsController@adminCreate']);
        Route::post('/create', ['as' => 'app.pads.store', 'uses' => 'DTPadsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.pads.edit', 'uses' => 'DTPadsController@adminEdit']);
            Route::post('/edit', ['as' => 'app.pads.update', 'uses' => 'DTPadsController@adminUpdate']);

            Route::get('/', ['as' => 'app.pads.show', 'uses' => 'DTPadsController@adminShow']);
            Route::delete('/', ['as' => 'app.pads.delete', 'uses' => 'DTPadsController@adminDestroy']);

        });
    });

    Route::group(['prefix' => 'permissions'], function () {

        Route::get('/', ['as' => 'app.permissions.index','uses' => 'DTPermissionsController@adminIndex']);

        Route::get('/create', ['as' => 'app.permissions.create','uses' => 'DTPermissionsController@adminCreate']);
        Route::post('/create', ['as' => 'app.permissions.store', 'uses' => 'DTPermissionsController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.permissions.edit', 'uses' => 'DTPermissionsController@adminEdit']);
            Route::post('/edit', ['as' => 'app.permissions.update', 'uses' => 'DTPermissionsController@adminUpdate']);

            Route::get('/', ['as' => 'app.permissions.show', 'uses' => 'DTPermissionsController@adminShow']);
            Route::delete('/', ['as' => 'app.permissions.delete', 'uses' => 'DTPermissionsController@adminDestroy']);

        });
    });

    Route::group(['prefix' => 'pizzas'], function () {

        Route::get('/', ['as' => 'app.pizzas.index','uses' => 'DTPizzasController@adminIndex']);

        Route::get('/create', ['as' => 'app.pizzas.create','uses' => 'DTPizzasController@adminCreate']);
        Route::post('/create', ['as' => 'app.pizzas.store', 'uses' => 'DTPizzasController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.pizzas.edit', 'uses' => 'DTPizzasController@adminEdit']);
            Route::post('/edit', ['as' => 'app.pizzas.update', 'uses' => 'DTPizzasController@adminUpdate']);

            Route::get('/', ['as' => 'app.pizzas.show', 'uses' => 'DTPizzasController@adminShow']);
            Route::delete('/', ['as' => 'app.pizzas.delete', 'uses' => 'DTPizzasController@adminDestroy']);

        });
    });

    Route::group(['prefix' => 'roles'], function () {

        Route::get('/', ['as' => 'app.roles.index','uses' => 'DTRolesController@adminIndex']);

        Route::get('/create', ['as' => 'app.roles.create','uses' => 'DTRolesController@adminCreate']);
        Route::post('/create', ['as' => 'app.roles.store', 'uses' => 'DTRolesController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.roles.edit', 'uses' => 'DTRolesController@adminEdit']);
            Route::post('/edit', ['as' => 'app.roles.update', 'uses' => 'DTRolesController@adminUpdate']);

            Route::get('/', ['as' => 'app.roles.show', 'uses' => 'DTRolesController@adminShow']);
            Route::delete('/', ['as' => 'app.roles.delete', 'uses' => 'DTRolesController@adminDestroy']);

        });
    });

    Route::group(['prefix' => 'users'], function () {

        Route::get('/', ['as' => 'app.users.index','uses' => 'DTUsersController@adminIndex']);

        Route::get('/create', ['as' => 'app.users.create','uses' => 'DTUsersController@adminCreate']);
        Route::post('/create', ['as' => 'app.users.store', 'uses' => 'DTUsersController@adminStore']);

        Route::group(['prefix' => '{id}'], function () {

            Route::get('/edit', ['as' => 'app.users.edit', 'uses' => 'DTUsersController@adminEdit']);
            Route::post('/edit', ['as' => 'app.users.update', 'uses' => 'DTUsersController@adminUpdate']);

            Route::get('/', ['as' => 'app.users.show', 'uses' => 'DTUsersController@adminShow']);
            Route::delete('/', ['as' => 'app.users.delete', 'uses' => 'DTUsersController@adminDestroy']);

        });
    });

});


Route::group(['prefix' => 'pizzas', 'middleware' => ['auth', 'check-role-member']], function () {

    Route::get('/', ['as' => 'front-end.pizzas.index', 'uses' => 'DTPizzasController@index']);

    Route::get('/create', ['as' => 'front-end.pizzas.create', 'uses' => 'DTPizzasController@create']);
    Route::post('/create', ['as' => 'front-end.pizzas.store', 'uses' => 'DTPizzasController@store']);

    Route::group(['prefix' => '{id}'], function () {

        Route::get('/edit', ['as' => 'front-end.pizzas.edit', 'uses' => 'DTPizzasController@edit']);
        Route::post('/edit', ['as' => 'front-end.pizzas.update', 'uses' => 'DTPizzasController@update']);

        Route::get('/', ['as' => 'front-end.pizzas.show', 'uses' => 'DTPizzasController@show']);
        Route::delete('/', ['as' => 'front-end.pizzas.delete', 'uses' => 'DTPizzasController@destroy']);

    });
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

