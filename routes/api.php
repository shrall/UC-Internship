<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\Student\UserController as StudentUserController;
use App\Http\Controllers\Api\Supervisor\UserController as SupervisorUserController;
use App\Http\Controllers\Api\TaskController;
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

Route::post('api-login', [LoginController::class, 'login']);
Route::post('api-refresh', [LoginController::class, 'refresh']);

Route::group(['middleware' => 'auth:api'], function () {
    Route::apiResource('student/user', StudentUserController::class);
    Route::apiResource('supervisor/user', SupervisorUserController::class);
    Route::apiResource('project', ProjectController::class);
    Route::apiResource('offer', OfferController::class);
    Route::apiResource('task', TaskController::class);
    Route::post('api-logout', [LoginController::class, 'logout']);
});
