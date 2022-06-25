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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [\App\Http\Controllers\PostController::class , 'index']);
Route::get('/{post}', [\App\Http\Controllers\PostController::class , 'show']);
Route::get('/create', [\App\Http\Controllers\PostController::class , 'create']);
Route::post('/create', [\App\Http\Controllers\PostController::class , 'store']);
Route::get('/{post}/edit', [\App\Http\Controllers\PostController::class , 'edit']);

Route::put('/{post}/edit', [\App\Http\Controllers\PostController::class , 'update']);
Route::delete('/{post}', [\App\Http\Controllers\PostController::class , 'destroy']);
Route::get('/list', [\App\Http\Controllers\PostController::class , redirect("https://7learn.com")]);
Route::get('/http://127.0.0.1:8000/about', [\App\Http\Controllers\PostController::class , function(){
    echo "fhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh";
}]);
Route::view('/h','home');
