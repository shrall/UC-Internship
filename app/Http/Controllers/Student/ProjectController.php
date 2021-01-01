<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\ProjectResource;
use App\Models\Project;
use App\Models\ProjectUser;
use App\Models\Student;
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
        $pages = "project";

//        $pus  = ProjectUser::where('uci_user_id',Auth::id())->get();
//        dd($pus);

        return view('student.project.index', compact('pages'));


        // manggil semua project yang dipunya oleh student yang login
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
        //create projectuser

        ProjectUser::create([
            'status' => '0',
            'uci_project_id' => $request['project_id'],
            'uci_user_id' => Auth::id(),
        ]);

        return redirect()->route('student.project.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //!NOTE kalau user yang login bukan anggota dari project tsb, redirect()->back()
        $pages = "project";

//        if ($task->id != Auth::id()) {
//            return redirect()->back();
//        } else {
        return view('student.project.detail', compact('pages', 'project'));
//    }

        //disini manggil semua student yang merupakan anggota dari project yang di liat
        // disini manggil semua task dari project yang diliat
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
    public function offer()
    {
        $pages = "project";

        //kita cek smua project yg status nya available, kita cek project yang belum dimiliki user tsb

        $projects = Project::where('status', '0')
            ->whereDoesntHave('projectusers', function (Builder $query) {
                $query->where('uci_user_id', Auth::id());
            })->get();

        return view('student.project.offer', compact('pages', 'projects'));


        //disini manggil semua project yang statusnya available
    }
}
