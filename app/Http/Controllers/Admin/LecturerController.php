<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Jaka;
use App\Models\Lecturer;
use App\Models\Title;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class LecturerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'lecturer';
        $lecturers = User::where('detailable_type', 'App\Models\Lecturer')->whereNotIn('role_id', [1])->get();
        return view('admin.user.lecturer.index', compact('pages', 'lecturers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'lecturer';
        $departments = Department::all();
        $titles = Title::all();
        $jakas = Jaka::all();
        return view('admin.user.lecturer.create', compact('pages', 'departments', 'titles', 'jakas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'nip' => 'required|numeric|unique:lecturers,nip',
            'nidn' => 'required|numeric|unique:lecturers,nidn',
            'email' => 'required|unique:uci_users,email',
            'password' => 'required|string|min:8',
            'phone' => 'required|numeric',
            'line_account' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'title' => 'required',
            'jaka' => 'required',
            'photo' => 'image',
        ]);

        if ($request->has('photo')) {
            $file_name = time() . '-' . $data['photo']->getClientOriginalName();
            $request->photo->move(public_path('profile_picture/supervisor'), $file_name);
        } else {
            $file_name = null;
        }

        $lecturer = Lecturer::create([
            'nip' => $data['nip'],
            'nidn' => $data['nidn'],
            'name' => $data['name'],
            'email' => $data['email'],
            'photo' => $file_name,
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'line_account' => $data['line_account'],
            'department_id' => $data['department'],
            'title_id' => $data['title'],
            'jaka_id' => $data['jaka'],
        ]);


        $user = User::create([
            'name' => $lecturer['name'],
            'email' => $lecturer['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
            'detailable_id' => $lecturer['id'],
            'detailable_type' => 'App\Models\Lecturer',
        ]);

        return redirect()->route('admin.lecturer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function show(User $lecturer)
    {
        $pages = 'lecturer';
        if ($lecturer->role_id != 2 && $lecturer->detailable_type != "App\Models\lecturer") {
            return redirect()->back();
        } else {
            return view('admin.user.lecturer.detail', compact('pages', 'lecturer'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function edit(User $lecturer)
    {
        $pages = 'lecturer';
        $departments = Department::all();
        $titles = Title::all();
        $jakas = Jaka::all();
        if ($lecturer->role_id != 2) {
            return redirect()->back();
        } else {
            return view('admin.user.lecturer.edit', compact('pages', 'lecturer', 'departments', 'titles', 'jakas'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $lecturer)
    {
        if ($request->filled('password')) {
            Validator::make($request->all(), [
                'name' => 'required',
                'nip' => [
                    'required',
                    Rule::unique('lecturers', 'nip')->ignore($lecturer->detailable->id),
                ],
                'email' => [
                    'required',
                    Rule::unique('uci_users', 'email')->ignore($lecturer->id),
                ],
                'password' => 'string|min:8',
                'phone' => 'required|numeric',
                'line_account' => 'required',
                'gender' => 'required',
                'department' => 'required',
                'title' => 'required',
                'jaka' => 'required',
                'photo' => 'image',
            ])->validate();
        } else {
            Validator::make($request->all(), [
                'name' => 'required',
                'nip' => [
                    'required',
                    Rule::unique('lecturers', 'nip')->ignore($lecturer->detailable->id),
                ],
                'nidn' => [
                    'required',
                    Rule::unique('lecturers', 'nidn')->ignore($lecturer->detailable->id),
                ],
                'email' => [
                    'required',
                    Rule::unique('uci_users', 'email')->ignore($lecturer->id),
                ],
                'phone' => 'required|numeric',
                'line_account' => 'required',
                'gender' => 'required',
                'department' => 'required',
                'title' => 'required',
                'jaka' => 'required',
                'photo' => 'image',
            ])->validate();
        }

        if ($request->has('photo')) {
            $file_name = time() . '-' . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('profile_picture/supervisor'), $file_name);
            $lecturer->detailable->update([
                'photo' => $file_name,
            ]);
        }

        $lecturer->detailable->update([
            'nip' => $request->nip,
            'nip' => $request->nidn,
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'line_account' => $request->line_account,
            'department_id' => $request->department,
            'title_id' => $request->title,
            'jaka_id' => $request->jaka,
        ]);

        if ($request->filled('password')) {
            $lecturer->update([
                'name' => $lecturer['name'],
                'email' => $lecturer['email'],
                'password' => Hash::make($request->password),
            ]);
        } else {
            $lecturer->update([
                'name' => $lecturer['name'],
                'email' => $lecturer['email'],
            ]);
        }

        return redirect()->route('admin.lecturer.show', $lecturer->id)->with('Success', 'Edit Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecturer  $lecturer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecturer $lecturer)
    {
        //
    }
}
