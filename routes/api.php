<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/subscribe', function (Request $request) {
    return "You have subscribed";
});
Route::get('/website/create', function (Request $request) {
    return "You have subscribed";
});
Route::get('/subscribe', function (Request $request) {
    return "You have subscribed";
});

