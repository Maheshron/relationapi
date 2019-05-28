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
// Student Routes
Route::get('/getstudents','StudentLibraryController@index');
Route::post('/getstudents','StudentLibraryController@addstudent');
Route::post('/update','StudentLibraryController@update');
Route::post('/delete','StudentLibraryController@delete');

// Book Routes
Route::get('/getbooks','BookController@books');
Route::post('/getbooks','BookController@addbooks');
Route::post('/updatebook','BookController@updatebook');
Route::post('/deletebook','BookController@deletebook');

