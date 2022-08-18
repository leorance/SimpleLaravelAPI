<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
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


Route::apiResource('api/posts', PostController::class);
Route::get('/coba', function () {
    return 'Hello World';
});