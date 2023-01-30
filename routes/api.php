<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\deskController;
use \App\Http\Controllers\Api\DeskListcontroller;
use App\Http\Controllers\Api\Usercontroller;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::apiResources(
    [
        'users' => Usercontroller::class,
        'desks' => DeskController::class,
        'desklists' => DeskListcontroller::class,
    ]
);
