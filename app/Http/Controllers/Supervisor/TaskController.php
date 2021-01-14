<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\Task;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
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
        $pages = 'tasks';
        $projects = Project::where('supervisor_id', Auth::id())->get();
        $periods = Period::all();
        $currentdate = Carbon::now();
        foreach ($periods as $period) {
            if ($period['start'] < $currentdate && $period['end'] > $currentdate) {
                $currentperiod = $period;
            };
        }

        return view('supervisor.task.create', compact('pages', 'projects', 'currentperiod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = Task::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'deadline' => $request['deadline'],
            'duration' => '0',
            'status' => '0',
            'pu_id' => $request['pic'],
        ]);

        return redirect()->route('supervisor.project.show', $task->projectuser->uci_project_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        $pages = 'project';
        $periods = Period::all();
        $currentdate = Carbon::now();
        foreach ($periods as $period) {
            if ($period['start'] < $currentdate && $period['end'] > $currentdate) {
                $currentperiod = $period;
            };
        }
        $project = $task->projectuser->project;
        return view('supervisor.task.detail', compact('pages', 'task', 'currentperiod', 'project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        if($task->status != '0'){
            return redirect()->back();
        }
        $task->update($request->all());
        return redirect()->route('supervisor.project.show', $task->projectuser->uci_project_id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(Task $task)
    {
        if (($task->status == '0') && ($task->duration == 0)) {
            $task->delete();
            return redirect()->back();
        } else {
            return redirect()->back();
        }
    }
    public function finish(Task $task)
    {
        foreach($task->progresses as $progress){
            if ($progress->status = '0'){
                return redirect()->back();
            }
        }
        $task->update([
            'status' => '1',
        ]);
        return redirect()->back();
    }
}
