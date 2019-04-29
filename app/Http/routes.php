<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$app->get('/', function () use ($app) {
    return $app->app->version();
});

$app->group(['prefix' => 'api', 'namespace' => 'App\Http\Controllers' ], function () use ($app) {
    $app->get('/products',  ['uses' => 'ProductController@showAllProducts']);

    $app->get('/products/{id}', ['uses' => 'ProductController@showOneProduct']);

    $app->post('/products', ['uses' => 'ProductController@create']);

    $app->get('/stores',  ['uses' => 'StoreController@showAllStores']);

    $app->get('/reviews',  ['uses' => 'ReviewController@showAllReviews']);

});
