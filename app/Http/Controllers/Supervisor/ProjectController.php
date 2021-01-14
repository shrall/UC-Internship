<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Period;
use App\Models\Project;
use App\Models\ProjectAttachment;
use App\Models\ProjectUser;
use App\Models\Staff;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use ZipArchive;
use File;

class ProjectController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::user()->detailable_type == "App\Models\Staff") {
            $info = Staff::find(Auth::user()->detailable_id);
        } else if (Auth::user()->detailable_type == "App\Models\Lecturer") {
            $info = Lecturer::find(Auth::user()->detailable_id);
        }
        $pages = 'project';
        $projects = Project::where('supervisor_id', Auth::id())->get();
        $pus = ProjectUser::all();
        return view('supervisor.project.index', compact('pages', 'info', 'pus', 'projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::user()->detailable_type == "App\Models\Staff") {
            $info = Staff::find(Auth::user()->detailable_id);
        } else if (Auth::user()->detailable_type == "App\Models\Lecturer") {
            $info = Lecturer::find(Auth::user()->detailable_id);
        }
        $pages = 'project';
        $periods = Period::all();
        $currentdate = Carbon::now();
        foreach ($periods as $period) {
            if ($period['start'] < $currentdate && $period['end'] > $currentdate) {
                $currentperiod = $period;
            };
        }

        return view('supervisor.project.create', compact('pages', 'info', 'currentperiod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $project = Project::create([
            'name' => $request['name'],
            'description' => $request['description'],
            'deadline' => $request['deadline'],
            'status' => '0',
            'category' => $request['category'],
            'period_id' => $request['period'],
            'supervisor_id' => Auth::id()
        ]);

        if ($request['attachments'] != null) {
            $i = 0;
            foreach ($request->file('attachments') as $file) {
                $attachment = new ProjectAttachment;
                $file_name = time() . $i . '-' . $file->getClientOriginalName();
                $file->move(public_path('attachments\project'), $file_name);
                $attachment->name = $file_name;
                $attachment->project_id = $project['id'];
                $attachment->save();
                $i++;
            }
        }

        return redirect()->route('supervisor.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
            $pages = "project";
            $periods = Period::all();
            $currentdate = Carbon::now();
            foreach ($periods as $period) {
                if ($period['start'] < $currentdate && $period['end'] > $currentdate) {
                    $currentperiod = $period;
                };
            }
            $attachments = ProjectAttachment::where('project_id', $project->id)->get();
            $attachmentscount = $attachments->count();
            return view('supervisor.project.detail', compact('pages', 'project', 'currentperiod','attachmentscount'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $pages = 'project';
        $periods = Period::all();
        $currentdate = Carbon::now();
        foreach ($periods as $period) {
            if ($period['start'] < $currentdate && $period['end'] > $currentdate) {
                $currentperiod = $period;
            };
        }
        return view('supervisor.project.edit', compact('project', 'pages', 'currentperiod'));
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
        $project->update($request->all());
        return redirect()->route('supervisor.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->status == '0') {
            $project->delete();
            return redirect()->back();
        } else {
        }
    }
    public function ongoing(Request $request)
    {
        $projectstatus = Project::find($request->project_id);
        $projectstatus->update([
            'status' => '1',
        ]);

        return redirect()->back();
    }

    public function completed(Request $request)
    {
        $projectstatus = Project::find($request->project_id);
        $projectstatus->update([
            'status' => '2',
        ]);
        return redirect()->back();
    }

    public function zipFile(Project $project){
        $zip = new ZipArchive;
        $fileName = 'myzip.zip';
        $projectFiles = ProjectAttachment::whereHas('project', function (Builder $query) {
            $query->where('project_id', $project->id);
        })->get();
        if($zip->open(public_path('attachments\project' . $fileName), ZipArchive::CREATE)=== TRUE){
            $files = File::files(public_path('attachments\project'));
            foreach ($projectFiles as $key => $value){
                $relativeNameInZipFile = class_basename($value);
                $zip->addFile($value, $relativeNameInZipFile);
            }
            $zip->close();
        }
        return response()->download(public_path($fileName));
    }
}
