<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\PostController;
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
