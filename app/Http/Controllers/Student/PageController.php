<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\Student;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';

        $info = Student::find(Auth::user()->detailable_id);

        $tasks = Task::whereHas('projectuser', function (Builder $query) {
            $query->where('uci_user_id', Auth::id())
                ->where('status', '1')
                ->whereHas('project', function (Builder $query) {
                    $query->where('status', '1');
                });
        })->get();

        $projects = Project::where('status', '0')->get();

        $pus = ProjectUser::where('uci_user_id', Auth::id())
            ->whereHas('project', function (Builder $query) {
                $query->where('status', '1');
            })->where('status', '1')->get();


        $periods = Period::all();
        $currentdate = Carbon::now();
        foreach ($periods as $period) {
            if ($period['start'] < $currentdate && $period['end'] > $currentdate) {
                $currentperiod = $period;
            };
        }

        return view('student.dashboard', compact('pages', 'info', 'tasks', 'projects', 'pus', 'currentperiod'));
    }
}
