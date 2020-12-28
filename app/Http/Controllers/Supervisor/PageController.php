<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Progress;
use App\Models\ProjectUser;
use App\Models\Staff;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        $pages = 'dash';

        if (Auth::user()->detailable_type == "App\Models\Staff") {
            $info = Staff::find(Auth::user()->detailable_id);
        } else if (Auth::user()->detailable_type == "App\Models\Lecturer") {
            $info = Lecturer::find(Auth::user()->detailable_id);
        }

        $pus = ProjectUser::whereHas('project', function (Builder $query) {
            $query->where('supervisor_id', Auth::id());
        })->where('status', '0')->get();

        $progresses = Progress::whereHas('task', function (Builder $query) {
            $query->whereHas('projectuser', function (Builder $query) {
                $query->whereHas('project', function (Builder $query) {
                    $query->where('supervisor_id', Auth::id());
                });
            });
        })->where('status', '0')->get();

        return view('supervisor.dashboard', compact('pages', 'info', 'pus', 'progresses'));
    }
}
