<?php

//admin
use App\Http\Controllers\admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\admin\HistoryController as AdminHistoryController;
use App\Http\Controllers\admin\InfoController as AdminInfoController;
use App\Http\Controllers\admin\JakaController as AdminJakaController;
use App\Http\Controllers\admin\LecturerController as AdminLecturerController;
use App\Http\Controllers\admin\PageController as AdminPageController;
use App\Http\Controllers\admin\PeriodController as AdminPeriodController;
use App\Http\Controllers\admin\ProgressController as AdminProgressController;
use App\Http\Controllers\admin\ProjectController as AdminProjectController;
use App\Http\Controllers\admin\ScholarshipController as AdminScholarshipController;
use App\Http\Controllers\admin\StaffController as AdminStaffController;
use App\Http\Controllers\admin\StudentController as AdminStudentController;
use App\Http\Controllers\admin\TaskController as AdminTaskController;
use App\Http\Controllers\admin\TitleController as AdminTitleController;
use App\Http\Controllers\admin\UserController as AdminUserController;
//staff
use App\Http\Controllers\staff\PageController as StaffPageController;
use App\Http\Controllers\staff\ProgressController as StaffProgressController;
use App\Http\Controllers\staff\ProjectController as StaffProjectController;
use App\Http\Controllers\staff\StudentController as StaffStudentController;
use App\Http\Controllers\staff\TaskController as StaffTaskController;
use App\Http\Controllers\staff\StaffController as StaffStaffController;
use App\Http\Controllers\staff\UserController as StaffUserController;

//student
use App\Http\Controllers\student\PageController as StudentPageController;
use App\Http\Controllers\student\ProjectController as StudentProjectController;
use App\Http\Controllers\student\TaskController as StudentTaskController;
use App\Http\Controllers\student\ProgressController as StudentProgressController;
use App\Http\Controllers\student\UserController as StudentUserController;

use Illuminate\Support\Facades\Auth;
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

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminPageController::class, 'dashboard'])->name('dashboard');
    Route::resource('department', AdminDepartmentController::class);
    Route::resource('history', AdminHistoryController::class);
    Route::resource('info', AdminInfoController::class);
    Route::resource('jaka', AdminJakaController::class);
    Route::resource('lecturer', AdminLecturerController::class);
    Route::resource('project', AdminProjectController::class);
    Route::resource('progress', AdminProgressController::class);
    Route::resource('scholarship', AdminScholarshipController::class);
    Route::resource('task', AdminTaskController::class);
    Route::resource('title', AdminTitleController::class);
    Route::resource('period', AdminPeriodController::class);
    Route::resource('staff', AdminStaffController::class);
    Route::resource('student', AdminStudentController::class);
    Route::resource('user', AdminUserController::class);
});

Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/', [StudentPageController::class, 'dashboard'])->name('dashboard');
    Route::get('/application', [StudentPageController::class, 'application'])->name('application');
    Route::resource('project', StudentProjectController::class);
    Route::resource('task', StudentTaskController::class);
    Route::resource('progress', StudentProgressController::class);
    Route::resource('user', StudentUserController::class);
    Route::get('/offer', [StudentProjectController::class, 'offer'])->name('project.offer');
    Route::get('/exportc', [StudentUserController::class, 'check'])->name('export.check');
    Route::get('/export', [StudentUserController::class, 'export'])->name('export');
});

Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {
    Route::get('/', [StaffPageController::class, 'dashboard'])->name('dashboard');
    Route::resource('project', ProjectController::class);
    Route::resource('project', StaffProjectController::class);
    Route::resource('progress', StaffProgressController::class);
    Route::resource('task', StaffTaskController::class);
    Route::resource('student', StaffStudentController::class);
    Route::resource('staff', StaffStaffController::class);
    Route::resource('user', StaffUserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
