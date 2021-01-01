<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Department;
use App\Models\Scholarship;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //! NOTE disini ngecek dapet idnya user siapa, kalo bukan user yang login redirect()->back()
        $pages = "student";

//        dd($student);

        if ($user->id != Auth::id()) {
            return redirect()->back();
        } else {
              return view('student.student.detail', compact('pages','user'));
        }

        //ngambil semua projectuser yang user idnya punyanya yang login
        //ngambil semua task yang dipunya sama orang yang login
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //! NOTE disini ngecek dapet idnya user siapa, kalo bukan user yang login redirect()->back()
        $pages = 'student';
        if ($user->id != Auth::id()) {
            return redirect()->back();
        } else {
            return view('student.student.edit', compact('pages', 'user'));

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
        //! NOTE disini ngecek dapet idnya user siapa, kalo bukan user yang login redirect()->back()
        $pages = " ";

        //update user & student-> karena kalo ngrubah nama, nama di user&student kerubah
        //uplod foto&cv

        if($request->photo != null){
            Storage::delete($request->photo);
        }
        if($request->cv != null){
            Storage::delete($request->cv);
        }

//        dd($request);

        $data = $request->validate([
            'phone' => 'required|numeric',
            'line_account' => 'required',
            'photo' => 'image',
        ]);

        $user->detailable->update([
            'phone' => $data['phone'],
            'line_account' => $data['line_account'],
        ]);

        if ($request->has('photo')) {
            $file_name = time() . '-' . $data['photo']->getClientOriginalName();
            $request->photo->move(public_path('profile_picture\student'), $file_name);
            $user->detailable->update([
                'photo' => $file_name,
            ]);
        }

        if ($request->has('cv')) {
            $cv_name = time() . '-' . $request['cv']->getClientOriginalName();
            $request->cv->move(public_path('cv'), $cv_name);
            $user->info->update([
                'cv' => $cv_name,
            ]);
        }
//        dd("berhasil");

        return redirect()->route('student.user.show', $user->id);

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
    public function check()
    {
        //disini bisa return view ke export.blade cuma buat ngecek doang
    }

    public function export(){
        //ini baru exportnya :v
    }
}
