<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Period;
use App\Models\Project;
use App\Models\ProjectAttachment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use ZipArchive;
use File;
use Illuminate\Support\Facades\Storage;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'project';
        $projects = Project::all();
        return view('admin.project.index', compact('pages', 'projects'));
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
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        $pages = 'project';
        return view('admin.project.detail', compact('pages', 'project'));
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
        return view('admin.project.edit', compact('project', 'pages', 'currentperiod'));
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
        if ($request['attachments'] != null) {
            $attachments = ProjectAttachment::where('project_id', $project->id)->get();
            foreach ($attachments as $lastattachment) {
                $lastattachment->delete();
            }
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
        $project->update($request->all());
        return redirect()->route('admin.project.show', $project->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->update([
            'status' => '3',
        ]);
        return redirect()->back();
    }

    public function zipFile(Request $request)
    {
        $project = Project::find($request->project_id);
        $projectFiles = ProjectAttachment::where('project_id', $project->id)->get();
        $zip = new ZipArchive;
        $fileNameZip =  'attachments\zip\project_' . $project->name . '_attachments.zip';
        if (file_exists(public_path($fileNameZip))) {
            unlink(public_path($fileNameZip));
        }
        if ($zip->open(public_path($fileNameZip), ZipArchive::CREATE) === TRUE) {
            $files = File::files(public_path('attachments\project'));
            foreach ($files as $file) {
                foreach ($projectFiles as $projectFile) {
                    if ($projectFile->name == basename($file)) {
                        $zip->addFile($file, basename($file));
                    }
                }
            }
            $zip->close();
        }
        return response()->download(public_path($fileNameZip));
    }
}
