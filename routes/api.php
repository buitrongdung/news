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

Route::resource('images', 'ImagesController');
Route::get('images','ImagesController@index');
Route::post('images', 'ImagesController@store');
Route::group(['prefix' => 'vi', 'middleware' => 'cors'], function() {
   Route::resource('posts', 'PostsController');
});
