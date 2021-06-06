<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HouseApiController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', [AuthController::class, 'login'])->name('login-api');
Route::post('signup', [AuthController::class, 'signup'])->name('signup-api');
Route::get('logout', [AuthController::class, 'logout'])
    // ->middleware('auth:api')
    ->name('logout-api');

Route::get('houses', [HouseApiController::class, 'index']);
Route::post('houses/list', [HouseApiController::class, 'filter']);

