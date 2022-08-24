<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Job;
use App\Models\User;
use Illuminate\Database\Console\DumpCommand;
use Illuminate\Http\JsonResponse;
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


Route::apiResource('posts', PostController::class);
Route::apiResource('jobs', JobController::class);
Route::post('registration', [AuthController::class, 'register'])->name('user.registration');



Route::middleware(['auth:sanctum'])->group(function () {
    Route::get('/user', [UserController::class, 'index'])->name('all.user');
});
