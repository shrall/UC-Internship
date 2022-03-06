<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Staff;
use App\Models\Title;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'staff';
        $staffs = User::where('detailable_type', 'App\Models\Staff')->whereNotIn('role_id', [1])->get();
        return view('admin.user.staff.index', compact('pages', 'staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'staff';
        $departments = Department::all();
        $titles = Title::all();
        return view('admin.user.staff.create', compact('pages', 'departments', 'titles'));
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
            'nip' => 'required|numeric|unique:staff,nip',
            'email' => 'required|unique:uci_users,email',
            'password' => 'required|string|min:8',
            'phone' => 'required|numeric',
            'line_account' => 'required',
            'gender' => 'required',
            'department' => 'required',
            'title' => 'required',
            'photo' => 'image',
        ]);

        if ($request->has('photo')) {
            $file_name = time() . '-' . $data['photo']->getClientOriginalName();
            $request->photo->move(public_path('../profile_picture\supervisor'), $file_name);
        } else {
            $file_name = null;
        }

        $staff = Staff::create([
            'nip' => $data['nip'],
            'name' => $data['name'],
            'email' => $data['email'],
            'photo' => $file_name,
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'line_account' => $data['line_account'],
            'department_id' => $data['department'],
            'title_id' => $data['title'],
        ]);


        $user = User::create([
            'name' => $staff['name'],
            'email' => $staff['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 2,
            'detailable_id' => $staff['id'],
            'detailable_type' => 'App\Models\Staff',
        ]);

        return redirect()->route('admin.staff.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(User $staff)
    {
        $pages = 'staff';
        if ($staff->role_id != 2 && $staff->detailable_type != "App\Models\Staff") {
            return redirect()->back();
        } else {
            return view('admin.user.staff.detail', compact('pages', 'staff'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(User $staff)
    {
        $pages = 'staff';
        $departments = Department::all();
        $titles = Title::all();
        if ($staff->role_id != 2) {
            return redirect()->back();
        } else {
            return view('admin.user.staff.edit', compact('pages', 'staff', 'departments', 'titles'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $staff)
    {
        if ($request->filled('password')) {
            Validator::make($request->all(), [
                'name' => 'required',
                'nip' => [
                    'required',
                    Rule::unique('staff', 'nip')->ignore($staff->detailable->id),
                ],
                'email' => [
                    'required',
                    Rule::unique('uci_users', 'email')->ignore($staff->id),
                ],
                'password' => 'string|min:8',
                'phone' => 'required|numeric',
                'line_account' => 'required',
                'gender' => 'required',
                'department' => 'required',
                'title' => 'required',
                'photo' => 'image',
            ])->validate();
        } else {
            Validator::make($request->all(), [
                'name' => 'required',
                'nip' => [
                    'required',
                    Rule::unique('staff', 'nip')->ignore($staff->detailable->id),
                ],
                'email' => [
                    'required',
                    Rule::unique('uci_users', 'email')->ignore($staff->id),
                ],
                'phone' => 'required|numeric',
                'line_account' => 'required',
                'gender' => 'required',
                'department' => 'required',
                'title' => 'required',
                'photo' => 'image',
            ])->validate();
        }

        if ($request->has('photo')) {
            $file_name = time() . '-' . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('../profile_picture/supervisor'), $file_name);
            $staff->detailable->update([
                'photo' => $file_name,
            ]);
        }

        $staff->detailable->update([
            'nip' => $request->nip,
            'name' => $request->name,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'line_account' => $request->line_account,
            'department_id' => $request->department,
            'title_id' => $request->title,
        ]);

        if ($request->filled('password')) {
            $staff->update([
                'name' => $staff['name'],
                'email' => $staff['email'],
                'password' => Hash::make($request->password),
            ]);
        } else {
            $staff->update([
                'name' => $staff['name'],
                'email' => $staff['email'],
            ]);
        }

        return redirect()->route('admin.staff.show', $staff->id)->with('Success', 'Edit Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Staff $staff)
    {
        //
    }
}
