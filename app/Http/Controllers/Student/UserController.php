<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Student;
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //! NOTE disini ngecek dapet idnya user siapa, kalo bukan user yang login redirect()->back()
        $pages = "student";

        $info = Student::find(Auth::user()->detailable_id);

        return view('student.student.detail', compact('pages', 'info'));

        //ngambil semua projectuser yang user idnya punyanya yang login
        //ngambil semua task yang dipunya sama orang yang login
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //! NOTE disini ngecek dapet idnya user siapa, kalo bukan user yang login redirect()->back()
        $pages = " ";

        $info = Student::find(Auth::user()->detailable_id);
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
        //! NOTE disini ngecek dapet idnya user siapa, kalo bukan user yang login redirect()->back()
        $pages = " ";

        $info = Student::find(Auth::user()->detailable_id);

        //update user & student-> karena kalo ngrubah nama, nama di user&student kerubah
        //uplod foto&cv
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
