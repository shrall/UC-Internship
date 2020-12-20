<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';
        $info = Student::find(Auth::user()->detailable_id);
        $tasks = Task::whereHas('projectuser', function (Builder $query) {
            $query->where('uci_user_id', Auth::id());
        })->where('is_approved', '0')->take(2)->get();

        // dd($tasks);

        return view('student.dashboard', compact('pages', 'info', 'tasks'));
    }
}
