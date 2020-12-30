<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Scholarship;
use Illuminate\Http\Request;

class ScholarshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'scholarship';
        $scholarships = Scholarship::all();
        return view('admin.scholarship.index', compact('pages', 'scholarships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'scholarship';
        return view('admin.scholarship.create', compact('pages'));
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
            'grade' => 'required|string|max:1',
            'duration' => 'required|numeric|max:1',
            'minimum_gpa' => 'required|numeric|between:0.00,4.00',
            'hps' => 'required|numeric',
        ]);

        Scholarship::create([
            'name' => $data['name'],
            'grade' => $data['grade'],
            'duration' => $data['duration'],
            'minimum_gpa' => $data['minimum_gpa'],
            'hps' => $data['hps']
        ]);

        return redirect()->route('admin.scholarship.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function show(Scholarship $scholarship)
    {
        $pages = 'scholarship';
        return view('admin.scholarship.detail', compact('pages', 'scholarship'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function edit(Scholarship $scholarship)
    {
        $pages = 'scholarship';
        return view('admin.scholarship.edit', compact('pages', 'scholarship'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Scholarship $scholarship)
    {
        $data = $request->validate([
            'name' => 'required',
            'grade' => 'required|string|max:1',
            'duration' => 'required|numeric|max:1',
            'minimum_gpa' => 'required|numeric|between:0.00,4.00',
            'hps' => 'required|numeric',
        ]);

        $scholarship->update([
            'name' => $data['name'],
            'grade' => $data['grade'],
            'duration' => $data['duration'],
            'minimum_gpa' => $data['minimum_gpa'],
            'hps' => $data['hps']
        ]);

        return redirect()->route('admin.scholarship.show', $scholarship->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Scholarship  $scholarship
     * @return \Illuminate\Http\Response
     */
    public function destroy(Scholarship $scholarship)
    {
        if (count($scholarship->infos) == 0) {
            $scholarship->delete();
            return redirect()->back();
        } else {
        }
    }
}
