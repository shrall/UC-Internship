<?php
//Admin
use App\Http\Controllers\Admin\DepartmentController as AdminDepartmentController;
use App\Http\Controllers\Admin\HistoryController as AdminHistoryController;
use App\Http\Controllers\Admin\InfoController as AdminInfoController;
use App\Http\Controllers\Admin\JakaController as AdminJakaController;
use App\Http\Controllers\Admin\LecturerController as AdminLecturerController;
use App\Http\Controllers\Admin\PageController as AdminPageController;
use App\Http\Controllers\Admin\PeriodController as AdminPeriodController;
use App\Http\Controllers\Admin\ProgressController as AdminProgressController;
use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use App\Http\Controllers\Admin\ScholarshipController as AdminScholarshipController;
use App\Http\Controllers\Admin\StaffController as AdminStaffController;
use App\Http\Controllers\Admin\StudentController as AdminStudentController;
use App\Http\Controllers\Admin\TaskController as AdminTaskController;
use App\Http\Controllers\Admin\TitleController as AdminTitleController;
use App\Http\Controllers\Admin\UserController as AdminUserController;

//Staff
use App\Http\Controllers\Staff\DepartmentController as StaffDepartmentController;
use App\Http\Controllers\Staff\HistoryController as StaffHistoryController;
use App\Http\Controllers\Staff\InfoController as StaffInfoController;
use App\Http\Controllers\Staff\JakaController as StaffJakaController;
use App\Http\Controllers\Staff\LecturerController as StaffLecturerController;
use App\Http\Controllers\Staff\PageController as StaffPageController;
use App\Http\Controllers\Staff\PeriodController as StaffPeriodController;
use App\Http\Controllers\Staff\ProgressController as StaffProgressController;
use App\Http\Controllers\Staff\ProjectController as StaffProjectController;
use App\Http\Controllers\Staff\ScholarshipController as StaffScholarshipController;
use App\Http\Controllers\Staff\StaffController as StaffStaffController;
use App\Http\Controllers\Staff\StudentController as StaffStudentController;
use App\Http\Controllers\Staff\TaskController as StaffTaskController;
use App\Http\Controllers\Staff\TitleController as StaffTitleController;
use App\Http\Controllers\Staff\UserController as StaffUserController;

//Student
use App\Http\Controllers\Student\DepartmentController as StudentDepartmentController;
use App\Http\Controllers\Student\HistoryController as StudentHistoryController;
use App\Http\Controllers\Student\InfoController as StudentInfoController;
use App\Http\Controllers\Student\JakaController as StudentJakaController;
use App\Http\Controllers\Student\LecturerController as StudentLecturerController;
use App\Http\Controllers\Student\PageController as StudentPageController;
use App\Http\Controllers\Student\PeriodController as StudentPeriodController;
use App\Http\Controllers\Student\ProgressController as StudentProgressController;
use App\Http\Controllers\Student\ProjectController as StudentProjectController;
use App\Http\Controllers\Student\ScholarshipController as StudentScholarshipController;
use App\Http\Controllers\Student\StaffController as StudentStaffController;
use App\Http\Controllers\Student\StudentController as StudentStudentController;
use App\Http\Controllers\Student\TaskController as StudentTaskController;
use App\Http\Controllers\Student\TitleController as StudentTitleController;
use App\Http\Controllers\Student\UserController as StudentUserController;

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

Route::group(['prefix' => 'staff', 'as' => 'staff.'], function () {
    Route::get('/', [StaffPageController::class, 'dashboard'])->name('dashboard');
    Route::resource('department', StaffDepartmentController::class);
    Route::resource('history', StaffHistoryController::class);
    Route::resource('info', StaffInfoController::class);
    Route::resource('jaka', StaffJakaController::class);
    Route::resource('lecturer', StaffLecturerController::class);
    Route::resource('project', StaffProjectController::class);
    Route::resource('progress', StaffProgressController::class);
    Route::resource('scholarship', StaffScholarshipController::class);
    Route::resource('task', StaffTaskController::class);
    Route::resource('title', StaffTitleController::class);
    Route::resource('period', StaffPeriodController::class);
    Route::resource('staff', StaffStaffController::class);
    Route::resource('student', StaffStudentController::class);
    Route::resource('user', StaffUserController::class);
});

Route::group(['prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/', [StudentPageController::class, 'dashboard'])->name('dashboard');
    Route::resource('department', StudentDepartmentController::class);
    Route::resource('history', StudentHistoryController::class);
    Route::resource('info', StudentInfoController::class);
    Route::resource('jaka', StudentJakaController::class);
    Route::resource('lecturer', StudentLecturerController::class);
    Route::resource('project', StudentProjectController::class);
    Route::resource('progress', StudentProgressController::class);
    Route::resource('scholarship', StudentScholarshipController::class);
    Route::resource('task', StudentTaskController::class);
    Route::resource('title', StudentTitleController::class);
    Route::resource('period', StudentPeriodController::class);
    Route::resource('staff', StudentStaffController::class);
    Route::resource('student', StudentStudentController::class);
    Route::resource('user', StudentUserController::class);
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
