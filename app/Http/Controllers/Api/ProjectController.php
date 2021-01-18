<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProjectResource;
use App\Http\Resources\Api\TaskResource;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\Task;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->detailable_type == "App\Models\Lecturer" || Auth::user()->detailable_type == "App\Models\Staff") {
            $projects = Project::where('supervisor_id', Auth::id())->get();
        } else {
            $projects = Project::whereHas('projectusers', function (Builder $query) {
                $query->where('uci_user_id', Auth::id())->where('status', '1');
            })->get();
        }
        return ProjectResource::collection($projects);
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
        $pu = ProjectUser::create([
            'status' => '0',
            'uci_user_id' => Auth::id(),
            'uci_project_id' => $request->project,
        ]);
        return $pu;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return ProjectResource::make($project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function pending(){

        $projects = Project::whereHas('projectusers', function (Builder $query) {
            $query->where('uci_user_id', Auth::id())->where('status', '0');
        })->get();
        $projectscount = $projects->count();

        return ProjectResource::collection($projectscount);
    }

    public function accepted(){

        $projects = Project::whereHas('projectusers', function (Builder $query) {
            $query->where('uci_user_id', Auth::id())->where('status', '1');
        })->get();
        $projectscount = $projects->count();

        return ProjectResource::collection($projectscount);
    }
    public function tasks(Request $request)
    {
        $tasks = Task::whereHas('projectuser', function (Builder $query) use ($request){
            $query->where('uci_project_id', $request->project_id);
        })->get();

        return TaskResource::collection($tasks);
    }
}
