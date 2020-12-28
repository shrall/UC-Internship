<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\Project;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $user = User::findOrFail($request->uci_user_id);
        $works = $user->works()->syncWithoutDetaching($request->uci_project_id, ['status' => '1']);
        return empty($works) ? redirect()->back()->with('Fail', "Failed to accept student")
            : redirect()->back()->with('Success', 'Student Accepted');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //view my profile
        $projects = Project::where('supervisor_id', Auth::id())->get();
        $ongoingprojects = $projects->count();
        if (Auth::user()->detailable_type == "App\Models\Staff") {
            $pages = 'staff';
            $staff = $user;
            $info = Staff::find(Auth::user()->detailable_id);
            return view('supervisor.user.staff.detail', compact('pages', 'info', 'staff', 'ongoingprojects', 'projects'));
        } else if (Auth::user()->detailable_type == "App\Models\Lecturer") {
            $pages = 'lecturer';
            $lecturer = $user;
            $info = Lecturer::find(Auth::user()->detailable_id);
            return view('supervisor.user.lecturer.detail', compact('pages', 'info', 'lecturer','ongoingprojects', 'projects'));
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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

    public function accept($id, Request $request) {
        $user = User::findOrFail($id);
        $project = $user->works->where('id', '=', $request->uci_project_id)->first();
        $project->pivot->update([
            'is_approved' => '1',
        ]);

        return empty($project) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Success student: #('.$user->name.') approved');
    }

    public function decline($id, Request $request) {
        $user = User::findOrFail($id);
        $project = $user->works->where('id', '=', $request->uci_project_id)->first();
        $project->pivot->update([
            'is_approved' => '2',
        ]);

        return empty($project) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Success student: #('.$user->name.') approved');
    }
}
