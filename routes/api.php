<?php


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

Route::get('/requests', 'FeatureRequestController@index');

Route::middleware('auth:api')->group(function () {
    Route::post('/requests', 'FeatureRequestController@store');
});
