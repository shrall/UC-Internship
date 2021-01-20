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

//Supervisor
use App\Http\Controllers\Supervisor\DepartmentController as SupervisorDepartmentController;
use App\Http\Controllers\Supervisor\HistoryController as SupervisorHistoryController;
use App\Http\Controllers\Supervisor\InfoController as SupervisorInfoController;
use App\Http\Controllers\Supervisor\JakaController as SupervisorJakaController;
use App\Http\Controllers\Supervisor\LecturerController as SupervisorLecturerController;
use App\Http\Controllers\Supervisor\PageController as SupervisorPageController;
use App\Http\Controllers\Supervisor\PeriodController as SupervisorPeriodController;
use App\Http\Controllers\Supervisor\ProgressController as SupervisorProgressController;
use App\Http\Controllers\Supervisor\ProjectController as SupervisorProjectController;
use App\Http\Controllers\Supervisor\ScholarshipController as SupervisorScholarshipController;
use App\Http\Controllers\Supervisor\StaffController as SupervisorStaffController;
use App\Http\Controllers\Supervisor\StudentController as SupervisorStudentController;
use App\Http\Controllers\Supervisor\TaskController as SupervisorTaskController;
use App\Http\Controllers\Supervisor\TitleController as SupervisorTitleController;
use App\Http\Controllers\Supervisor\UserController as SupervisorUserController;
use App\Http\Controllers\Supervisor\ZipController as SupervisorZipController;

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
    return view('auth.login');
})->middleware('guest');


Route::group(['middleware' => ['admin'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::get('/', [AdminPageController::class, 'dashboard'])->name('dashboard');
    Route::get('/faq', [AdminPageController::class, 'faq'])->name('faq');
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
    //zip
    Route::post('project/zip', [AdminProjectController::class, 'zipFile'])->name('project.zipFile');;
});

Route::group(['middleware' => ['supervisor'], 'prefix' => 'supervisor', 'as' => 'supervisor.'], function () {
    Route::get('/', [SupervisorPageController::class, 'dashboard'])->name('dashboard');
    Route::get('/faq', [SupervisorPageController::class, 'faq'])->name('faq');
    Route::resource('department', SupervisorDepartmentController::class);
    Route::resource('history', SupervisorHistoryController::class);
    Route::resource('info', SupervisorInfoController::class);
    Route::resource('jaka', SupervisorJakaController::class);
    Route::resource('lecturer', SupervisorLecturerController::class);
    Route::resource('project', SupervisorProjectController::class);
    Route::resource('progress', SupervisorProgressController::class);
    Route::resource('scholarship', SupervisorScholarshipController::class);
    Route::resource('task', SupervisorTaskController::class);
    Route::resource('title', SupervisorTitleController::class);
    Route::resource('period', SupervisorPeriodController::class);
    Route::resource('staff', SupervisorStaffController::class);
    Route::resource('student', SupervisorStudentController::class);
    Route::resource('user', SupervisorUserController::class);
    //change project status
    Route::post('projects/ongoing', [SupervisorProjectController::class, 'ongoing'])->name('projects.ongoing');
    Route::post('projects/completed', [SupervisorProjectController::class, 'completed'])->name('projects.completed');
    //change task status
    Route::get('task/finish/{task}', [SupervisorTaskController::class, 'finish'])->name('task.finish');
    //approve and decline students
    Route::post('students/accept', [SupervisorUserController::class, 'accept'])->name('students.accept');
    Route::post('students/decline', [SupervisorUserController::class, 'decline'])->name('students.decline');
    //approve and decline progress
    Route::post('progresses/approve', [SupervisorProgressController::class, 'approve'])->name('progresses.approve');
    Route::post('progresses/decline', [SupervisorProgressController::class, 'decline'])->name('progresses.decline');
    //zip
    Route::post('project/zip', [SupervisorProjectController::class, 'zipFile'])->name('project.zipFile');;
});

Route::group(['middleware' => ['student'], 'prefix' => 'student', 'as' => 'student.'], function () {
    Route::get('/', [StudentPageController::class, 'dashboard'])->name('dashboard');
    Route::get('/faq', [StudentPageController::class, 'faq'])->name('faq');
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
    Route::get('/offer', [StudentProjectController::class, 'offer'])->name('project.offer');
    Route::get('/exportc', [StudentUserController::class, 'check'])->name('export.check');
    Route::get('/export', [StudentUserController::class, 'export'])->name('export');
    //zip
    Route::post('project/zip', [StudentProjectController::class, 'zipFile'])->name('project.zipFile');;
});

Auth::routes();
