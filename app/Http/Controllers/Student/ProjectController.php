<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectAttachment;
use App\Models\ProjectUser;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        $pages = "project";
        return view('student.project.index', compact('pages'));
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        ProjectUser::create([
            'status' => '0',
            'uci_user_id' => Auth::id(),
            'uci_project_id' => $request->project,
        ]);
        return redirect()->route('student.project.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        foreach ($project->projectusers as $pu) {
            if ($pu->uci_user_id == Auth::id()) {
                if ($pu->status == '1') {

                    $attachments = ProjectAttachment::where('project_id', $project->id)->get();
                    $attachmentscount = $attachments->count();

                    $pages = "project";
                    return view('student.project.detail', compact('pages', 'project', 'attachments', 'attachmentscount'));
                }
            }
        }


        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Project $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }

    public function offer()
    {
        $pages = "project";
        $projects = Project::where('status', '0')
            ->whereDoesntHave('projectusers', function (Builder $query) {
                $query->where('uci_user_id', Auth::id());
            })->get();

        return view('student.project.offer', compact('pages', 'projects'));
    }

    public function zipFile(Request $request)
    {
        $project = Project::find($request->project_id);
        $projectFiles = ProjectAttachment::where('project_id', $project->id)->get();
        $zip = new ZipArchive;
        $fileNameZip =  'attachments/zip/project_' . $project->name . '_attachments.zip';
        if (file_exists(public_path($fileNameZip))) {
            unlink(public_path($fileNameZip));
        }
        if ($zip->open(public_path($fileNameZip), ZipArchive::CREATE) === TRUE) {
            $files = File::files(public_path('../attachments/project'));
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
