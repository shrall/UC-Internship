<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Lecturer;
use App\Models\ProjectUser;
use App\Models\Student;
use App\Models\Project;
use App\Models\Staff;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

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
        if ($user->detailable_type == "App\Models\Staff") {
            $pages = 'staff';
            $staff = $user;
            $info = Staff::find($user->detailable_id);
            return view('supervisor.user.staff.detail', compact('pages', 'info', 'staff', 'ongoingprojects', 'projects'));
        } else if ($user->detailable_type == "App\Models\Lecturer") {
            $pages = 'lecturer';
            $lecturer = $user;
            $info = Lecturer::find($user->detailable_id);
            return view('supervisor.user.lecturer.detail', compact('pages', 'info', 'lecturer','ongoingprojects', 'projects'));
        } else if ($user->detailable_type == "App\Models\Student") {
            $pages = 'student';
            $student = $user;
            $info = Student::find($user->detailable_id);
            return view('supervisor.user.student.detail', compact('pages', 'info', 'student','ongoingprojects', 'projects'));
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
        $pages = 'supervisor';
        if ($user->id != Auth::id()) {
            return redirect()->back();
        } else if($user->detailable_type == "App\Models\Lecturer"){
            $lecturer = $user;
            return view('supervisor.user.lecturer.edit', compact('pages', 'lecturer'));
        } else if($user->detailable_type == "App\Models\Staff"){
            $staff = $user;
            return view('supervisor.user.staff.edit', compact('pages', 'staff'));
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
            'password' => 'required',
            'phone' => 'required|numeric',
            'line_account' => 'required',
            'photo' => 'image',
        ]);

        $user->detailable->update([
            'password' => $data['password'],
            'phone' => $data['phone'],
            'line_account' => $data['line_account'],
        ]);

        if ($request->filled('password')) {
            Validator::make($request->all(), [
                'password' => 'string|min:8',
                'phone' => 'required|numeric',
                'line_account' => 'required',
                'photo' => 'image',
            ])->validate();
        } else {
            Validator::make($request->all(), [
                'phone' => 'required|numeric',
                'line_account' => 'required',
                'photo' => 'image',
            ])->validate();
        }
        if($user->detailable_type == "App\Models\Staff"){
            if ($request->has('photo')) {
                $file_name = time() . '-' . $data['photo']->getClientOriginalName();
                $request->photo->move(public_path('profile_picture\staff'), $file_name);
                $user->detailable->update([
                    'photo' => $file_name,
                ]);
            }
        } else if($user->detailable_type == "App\Models\Lecturer"){
            if ($request->has('photo')) {
                $file_name = time() . '-' . $data['photo']->getClientOriginalName();
                $request->photo->move(public_path('profile_picture\lecturer'), $file_name);
                $user->detailable->update([
                    'photo' => $file_name,
                ]);
            }
        }

        if ($request->filled('password')) {
            $user->update([
                'name' => $user['name'],
                'email' => $user['email'],
                'password' => Hash::make($request->password),
            ]);
        } else {
            $user->update([
                'name' => $user['name'],
                'email' => $user['email'],
            ]);
        }
        return redirect()->route('supervisor.user.show', Auth::id());
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

    public function accept(Request $request) {
        $user = User::find($request->user_id);
        $project = Project::find($request->project_id);
        $pu = ProjectUser::where('uci_project_id', $project->id)->where('uci_user_id', $user->id)->first();
        $pu->update([
            'status' => '1',
        ]);

        return empty($project) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Success student: #('.$user->name.') approved');
    }

    public function decline(Request $request) {
        $user = User::find($request->user_id);
        $project = Project::find($request->project_id);
        $pu = ProjectUser::where('uci_project_id', $project->id)->where('uci_user_id', $user->id)->first();
        $pu->update([
            'status' => '2',
        ]);

        return empty($project) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Success student: #('.$user->name.') approved');
    }
}
