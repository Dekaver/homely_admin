<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::view('login-api', "api-tes");
Route::resource('houses', \App\Http\Controllers\HouseController::class)->shallow();
Route::resource('houses.image', \App\Http\Controllers\ImageController::class)->shallow();
Route::resource('houses.ruangan', \App\Http\Controllers\RuanganController::class)->shallow();
Route::resource('pictures', \App\Http\Controllers\ImageController::class)->except(['destroy', 'edit', 'show']);
Route::resource('users', \App\Http\Controllers\UsersController::class)->shallow();

Route::view('ruangan', 'ruangan-edit-form');
require __DIR__.'/auth.php';
