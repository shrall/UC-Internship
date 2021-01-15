<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\History;
use App\Models\Info;
use App\Models\Scholarship;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'student';
        $students = User::where('detailable_type', 'App\Models\Student')->whereNotIn('role_id', [1])->get();
        return view('admin.user.student.index', compact('pages', 'students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'student';
        $departments = Department::all();
        $scholarships = Scholarship::all();
        return view('admin.user.student.create', compact('pages', 'departments', 'scholarships'));
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
            'nim' => 'required|numeric|unique:students,nim',
            'email' => 'required|unique:uci_users,email',
            'password' => 'required|string|min:8',
            'phone' => 'required|numeric',
            'line_account' => 'required',
            'gender' => 'required',
            'batch' => 'required|numeric',
            'department' => 'required',
            'gpa' => 'required|numeric|between:0.00,4.00',
            'photo' => 'image',
        ]);

        if ($request->has('photo')) {
            $file_name = time() . '-' . $data['photo']->getClientOriginalName();
            $request->photo->move(public_path('profile_picture\student'), $file_name);
        } else {
            $file_name = null;
        }


        $student = Student::create([
            'nim' => $data['nim'],
            'name' => $data['name'],
            'email' => $data['email'],
            'batch' => $data['batch'],
            'photo' => $file_name,
            'gender' => $data['gender'],
            'phone' => $data['phone'],
            'line_account' => $data['line_account'],
            'department_id' => $data['department'],
        ]);

        if ($request->filled('scholarship')) {
            $scholarship = Scholarship::find($data['scholarship']);
            $info = Info::create([
                'time_remaining' => $scholarship['hps'],
                'gpa' => $data['gpa'],
                'scholarship_id' => $data['scholarship']
            ]);
        } else {
            $info = Info::create([
                'time_remaining' => 0,
                'gpa' => $data['gpa'],
                'scholarship_id' => null
            ]);
        }

        $user = User::create([
            'name' => $student['name'],
            'email' => $student['email'],
            'password' => Hash::make($data['password']),
            'role_id' => 3,
            'detailable_id' => $student['id'],
            'detailable_type' => 'App\Models\Student',
            'info_id' => $info['id']
        ]);

        History::create([
            'duration_before' => 0,
            'duration_after' => $info['time_remaining'],
            'student_id' => $user['id'],
            'supervisor_id' => Auth::id(),
        ]);

        return redirect()->route('admin.student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(User $student)
    {
        $pages = 'student';
        if ($student->role_id != 3) {
            return redirect()->back();
        } else {
            return view('admin.user.student.detail', compact('pages', 'student'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(User $student)
    {
        $pages = 'student';
        $departments = Department::all();
        $scholarships = Scholarship::all();
        if ($student->role_id != 3) {
            return redirect()->back();
        } else {
            return view('admin.user.student.edit', compact('pages', 'student', 'departments', 'scholarships'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $student)
    {
        if ($request->filled('password')) {
            Validator::make($request->all(), [
                'name' => 'required',
                'nim' => [
                    'required',
                    Rule::unique('students', 'nim')->ignore($student->detailable->id),
                ],
                'email' => [
                    'required',
                    Rule::unique('uci_users', 'email')->ignore($student->id),
                ],
                'password' => 'string|min:8',
                'phone' => 'required|numeric',
                'line_account' => 'required',
                'gender' => 'required',
                'batch' => 'required|numeric',
                'department' => 'required',
                'time_remaining' => 'required|numeric',
                'gpa' => 'required|numeric|between:0.00,4.00',
                'photo' => 'image',
            ])->validate();
        } else {
            Validator::make($request->all(), [
                'name' => 'required',
                'nim' => [
                    'required',
                    Rule::unique('students', 'nim')->ignore($student->detailable->id),
                ],
                'email' => [
                    'required',
                    Rule::unique('uci_users', 'email')->ignore($student->id),
                ],
                'phone' => 'required|numeric',
                'line_account' => 'required',
                'gender' => 'required',
                'batch' => 'required|numeric',
                'department' => 'required',
                'time_remaining' => 'required|numeric',
                'gpa' => 'required|numeric|between:0.00,4.00',
                'photo' => 'image',
            ])->validate();
        }

        if ($request->has('photo')) {
            $file_name = time() . '-' . $request->photo->getClientOriginalName();
            $request->photo->move(public_path('profile_picture\student'), $file_name);
            $student->detailable->update([
                'photo' => $file_name,
            ]);
        }

        $student->detailable->update([
            'nim' => $request->nim,
            'name' => $request->name,
            'email' => $request->email,
            'batch' => $request->batch,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'line_account' => $request->line_account,
            'department_id' => $request->department,
        ]);

        if ($request->filled('password')) {
            $student->update([
                'name' => $student['name'],
                'email' => $student['email'],
                'password' => Hash::make($request->password),
            ]);
        } else {
            $student->update([
                'name' => $student['name'],
                'email' => $student['email'],
            ]);
        }
        if ($request->filled('scholarship')) {
            $scholarship = Scholarship::find($request->scholarship);
            if ($student->info->time_remaining != $request->time_remaining) {
                History::create([
                    'duration_before' => $student->info->time_remaining,
                    'duration_after' => $request->time_remaining,
                    'student_id' => $student->id,
                    'supervisor_id' => Auth::id(),
                ]);
            }
            $student->info->update([
                'time_remaining' => $request->time_remaining,
                'gpa' => $request->gpa,
                'scholarship_id' => $request->scholarship
            ]);
        } else {
            History::create([
                'duration_before' => $student->info->time_remaining,
                'duration_after' => 0,
                'student_id' => $student->id,
                'supervisor_id' => Auth::id(),
            ]);
            $student->info->update([
                'time_remaining' => 0,
                'gpa' => $request->gpa,
                'scholarship_id' => null
            ]);
        }

        return redirect()->route('admin.student.show', $student->id)->with('Success', 'Edit Success!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
