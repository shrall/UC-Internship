<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\Student\AcceptedProjectController;
use App\Http\Controllers\Api\Student\DeclinedProjectController;
use App\Http\Controllers\Api\Student\PendingProjectController;
use App\Http\Controllers\Api\Student\ProgressController as StudentProgressController;
use App\Http\Controllers\Api\Supervisor\ProgressController as SupervisorProgressController;
use App\Http\Controllers\Api\ProjectController;
use App\Http\Controllers\Api\EventProjectController;
use App\Http\Controllers\Api\EducationProjectController;
use App\Http\Controllers\Api\OtherProjectController;
use App\Http\Controllers\Api\Student\UserController as StudentUserController;
use App\Http\Controllers\Api\Supervisor\UserController as SupervisorUserController;
use App\Http\Controllers\Api\Supervisor\StudentController as SupervisorAcceptedStudentController;
use App\Http\Controllers\Api\Supervisor\ApplicantController as SupervisorAppliedStudentController;
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
    Route::apiResource('projects/event', EventProjectController::class);
    Route::apiResource('projects/education', EducationProjectController::class);
    Route::apiResource('projects/other', OtherProjectController::class);
    Route::apiResource('offer', OfferController::class);
    Route::apiResource('accept', AcceptedProjectController::class);
    Route::apiResource('pending', PendingProjectController::class);
    Route::apiResource('task', TaskController::class);
    Route::apiResource('applied-students', SupervisorAppliedStudentController::class);
    Route::apiResource('accepted-students', SupervisorAcceptedStudentController::class);
    Route::apiResource('student/progress', StudentProgressController::class);
    Route::apiResource('supervisor/progress', SupervisorProgressController::class);
    Route::post('supervisor/applicant/accept', [SupervisorUserController::class, 'accept'])->name('students.accept');
    Route::post('supervisor/applicant/decline', [SupervisorUserController::class, 'decline'])->name('students.decline');
    Route::post('api-logout', [LoginController::class, 'logout']);
});
