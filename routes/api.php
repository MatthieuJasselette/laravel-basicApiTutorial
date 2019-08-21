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

Route::apiResource('/person', 'Api\v1\PersonController')
->only(['show', 'destroy', 'store', 'update']);

Route::apiResource('/person', 'Api\v1\PersonController')
->only('index');

// defines default routes for index, store, show, update & destroy