<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;

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

Route::get("data",[ShopController::class,'getData']);
Route::get("list",[ShopController::class,'list']);
Route::post("add",[ShopController::class,'add']);
Route::put("update",[ShopController::class,'update']);
Route::delete("delete/{id}",[ShopController::class,'delete']);
Route::get("search/{name}",[ShopController::class,'search']);
