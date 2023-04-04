<?php

use App\Http\Controllers\Api\V1\HotelController;
use App\Http\Controllers\Api\V1\RoomController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use LaravelJsonApi\Laravel\Facades\JsonApiRoute;
use LaravelJsonApi\Laravel\Http\Controllers\JsonApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

JsonApiRoute::server('v1')->prefix('v1')->resources(function ($server) {
        $server->resource('hotels', HotelController::class)
            ->relationships(function ($relations) {
                $relations->hasMany('rooms')
                    ->readOnly();
            });
        $server->resource('rooms', RoomController::class)
            //->name('update', 'books.booking')
            ->actions(function ($actions) {
                $actions->withId()->patch('booking');
            })
            ->relationships(function ($relations) {
                $relations->hasOne('hotel')
                    ->readOnly();
            });
    });
