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

Route::get('room/{room_id}','Admin\RoomController@room_api');

Route::get('/room-id/{id}','Admin\RoomController@room_id');

Route::post('room-save','Admin\RoomController@save_booking');
