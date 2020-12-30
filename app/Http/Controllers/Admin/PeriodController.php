<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Period;
use Illuminate\Http\Request;

class PeriodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = 'period';
        $periods = Period::all();
        return view('admin.period.index', compact('pages', 'periods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $pages = 'period';
        return view('admin.period.create', compact('pages'));
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
            'term' => 'required',
            'start' => 'required|date',
            'end' => 'required|date',
        ]);

        if ($data['start'] >= $data['end']) {
            return redirect()->route('admin.period.create')->with('Error', 'The starting date cannot exceed the end date');
        }
        $periods = Period::all();

        foreach ($periods as $period) {
            if ($data['start'] >= $period->start && $data['start'] <= $period->end) {
                return redirect()->route('admin.period.create')->with('Error', 'There is already an ongoing period from ' . date('jS, F Y', strtotime($period->start)) . ' to ' . date('jS, F Y', strtotime($period->end)));
            }
            if ($data['end'] >= $period->start && $data['end'] <= $period->end) {
                return redirect()->route('admin.period.create')->with('Error', 'There is already an ongoing period from ' . date('jS, F Y', strtotime($period->start)) . ' to ' . date('jS, F Y', strtotime($period->end)));
            }
            if ($data['start'] <= $period->start && $data['end'] >= $period->end) {
                return redirect()->route('admin.period.create')->with('Error', 'There is already an ongoing period from ' . date('jS, F Y', strtotime($period->start)) . ' to ' . date('jS, F Y', strtotime($period->end)));
            }
        }

        Period::create([
            'term' => $data['term'],
            'start' => $data['start'],
            'end' => $data['end']
        ]);
        return redirect()->route('admin.period.index')->with('Success', 'Period Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function show(Period $period)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function edit(Period $period)
    {
        $pages = 'period';
        return view('admin.period.edit', compact('pages', 'period'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Period $period)
    {
        $data = $request->validate([
            'term' => 'required',
            'start' => 'required|date',
            'end' => 'required|date',
        ]);

        if ($data['start'] >= $data['end']) {
            return redirect()->route('admin.period.edit', $period->id)->with('Error', 'The starting date cannot exceed the end date');
        }

        $periods = Period::whereNotIn('id', [$period->id])->get();

        foreach ($periods as $periodcheck) {
            if ($data['start'] >= $periodcheck->start && $data['start'] <= $periodcheck->end) {
                return redirect()->route('admin.period.edit', $period->id)->with('Error', 'There is already an ongoing period from ' . date('jS, F Y', strtotime($periodcheck->start)) . ' to ' . date('jS, F Y', strtotime($periodcheck->end)));
            }
            if ($data['end'] >= $periodcheck->start && $data['end'] <= $periodcheck->end) {
                return redirect()->route('admin.period.edit', $period->id)->with('Error', 'There is already an ongoing period from ' . date('jS, F Y', strtotime($periodcheck->start)) . ' to ' . date('jS, F Y', strtotime($periodcheck->end)));
            }
            if ($data['start'] <= $periodcheck->start && $data['end'] >= $periodcheck->end) {
                return redirect()->route('admin.period.edit', $period->id)->with('Error', 'There is already an ongoing period from ' . date('jS, F Y', strtotime($periodcheck->start)) . ' to ' . date('jS, F Y', strtotime($periodcheck->end)));
            }
        }

        $period->update([
            'term' => $data['term'],
            'start' => $data['start'],
            'end' => $data['end']
        ]);

        return redirect()->route('admin.period.index')->with('Success', 'Period Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Period  $period
     * @return \Illuminate\Http\Response
     */
    public function destroy(Period $period)
    {
        //
    }
}
