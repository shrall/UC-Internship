<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\Task;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        $pages = "student";
        if ($user->id != Auth::id()) {
            return redirect()->back();
        } else {
            return view('student.user.student.detail', compact('pages', 'user'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        $pages = 'student';
        if ($user->id != Auth::id()) {
            return redirect()->back();
        } else {
            return view('student.user.student.edit', compact('pages', 'user'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'phone' => 'required|numeric',
            'line_account' => 'required',
            'photo' => 'image',
        ]);

        $user->detailable->update([
            'phone' => $data['phone'],
            'line_account' => $data['line_account'],
        ]);

        if ($request->has('photo')) {
            $file_name = time() . '-' . $data['photo']->getClientOriginalName();
            $request->photo->move(public_path('profile_picture\student'), $file_name);
            $user->detailable->update([
                'photo' => $file_name,
            ]);
        }

        if ($request->has('cv')) {
            $cv_name = time() . '-' . $request['cv']->getClientOriginalName();
            $request->cv->move(public_path('cv'), $cv_name);
            $user->info->update([
                'cv' => $cv_name,
            ]);
        }
        return redirect()->route('student.user.show', Auth::id());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function check()
    {
        $periods = Period::all();
        $currentdate = Carbon::now();
        foreach ($periods as $period) {
            if ($period['start'] < $currentdate && $period['end'] > $currentdate) {
                $currentperiod = $period;
            };
        }
        $totalduration = 0;
        $tasks = Task::whereHas('projectuser', function (Builder $query) {
            $query->where('uci_user_id', Auth::id());
        })->get();
        foreach ($tasks as $task) {
            $totalduration += $task->duration;
        }
        return view('student.user.student.export', compact('currentperiod', 'totalduration'));
    }

    public function export()
    {
        $periods = Period::all();
        $currentdate = Carbon::now();
        foreach ($periods as $period) {
            if ($period['start'] < $currentdate && $period['end'] > $currentdate) {
                $currentperiod = $period;
            };
        }
        $totalduration = 0;
        $tasks = Task::whereHas('projectuser', function (Builder $query) {
            $query->where('uci_user_id', Auth::id());
        })->get();
        foreach ($tasks as $task) {
            $totalduration += $task->duration;
        }
        $pdf = PDF::loadView('student.user.student.export', compact('currentperiod', 'totalduration'));
        return $pdf->download('report.pdf');
    }
}
