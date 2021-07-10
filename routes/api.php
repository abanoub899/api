<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApiController;

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

//api phase 1
Route::get("listEmployees",[ApiController::class,"listEmployees"]);
Route::get("singleEmployee/{id}",[ApiController::class,"getSingleEmployee"]);
Route::post("addEmployee",[ApiController::class,"createEmployee"]);
Route::put("updateEmployee/{id}",[ApiController::class,"updateEmployee"]);
Route::delete("deleteEmployee/{id}",[ApiController::class,"deleteEmployee"]);



