<?php

use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\EducationOfferController;
use App\Http\Controllers\Api\EventOfferController;
use App\Http\Controllers\Api\OfferController;
use App\Http\Controllers\Api\OtherOfferController;
use App\Http\Controllers\Api\Student\AcceptedProjectController;
use App\Http\Controllers\Api\Student\DeclinedProjectController;
use App\Http\Controllers\Api\Student\PendingProjectController;
use App\Http\Controllers\Api\Student\ProgressController as StudentProgressController;
use App\Http\Controllers\Api\Student\TimeCompletedController;
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
    Route::apiResource('offers/event', EventOfferController::class);
    Route::apiResource('offers/education', EducationOfferController::class);
    Route::apiResource('offers/other', OtherOfferController::class);
    Route::apiResource('accept', AcceptedProjectController::class);
    Route::apiResource('pending', PendingProjectController::class);
    Route::apiResource('task', TaskController::class);
    Route::apiResource('applied-students', SupervisorAppliedStudentController::class);
    Route::apiResource('accepted-students', SupervisorAcceptedStudentController::class);
    Route::apiResource('student/progress', StudentProgressController::class);
    Route::apiResource('supervisor/progress', SupervisorProgressController::class);
    Route::post('supervisor/applicant/accept', [SupervisorUserController::class, 'accept'])->name('students.accept');
    Route::post('supervisor/applicant/decline', [SupervisorUserController::class, 'decline'])->name('students.decline');
    Route::post('project/tasks', [ProjectController::class, 'tasks'])->name('project.tasks');
    //approve and decline progress
    Route::post('progress/approve', [SupervisorProgressController::class, 'approve'])->name('progress.approve');
    Route::post('progress/decline', [SupervisorProgressController::class, 'decline'])->name('progress.decline');
    //apply to a project
    Route::post('project/apply', [ProjectController::class, 'apply'])->name('project.apply');
    Route::post('api-logout', [LoginController::class, 'logout']);
});
