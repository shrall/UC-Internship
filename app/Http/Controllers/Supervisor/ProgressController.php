<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\History;
use App\Models\Progress;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProgressController extends Controller
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
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function show(Progress $progress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(Progress $progress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progress $progress)
    {
//        $progress->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Progress  $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progress $progress)
    {
        //
    }

    public function approve(Request $request) {
        $progress = Progress::find($request->progress_id);
        $d1 = new DateTime($progress->time_end);
        $d2 = new DateTime($progress->time_start);
        $diff = $d2->diff($d1);
        $progress_duration = $diff->h + $diff->i/60;
        $interval = $d1->diff($d2);
        $days = $interval->format('%a');
        $progress->update([
            'status' => '1',
            'comment' => $request['comment'],
        ]);

        $progress->task->update([
            'duration' => $progress->task->duration + $progress_duration + ($days * 24)
        ]);

        $history = History::create([
            'duration_before' => $progress->task->projectuser->user->info->time_remaining,
            'duration_after' => $progress->task->projectuser->user->info->time_remaining - $progress_duration,
            'student_id' => $progress->task->projectuser->uci_user_id,
            'supervisor_id' => Auth::id(),
        ]);

        $progress->task->projectuser->user->info->update([
            'time_remaining' => $history->duration_after,
        ]);

        return empty($progress) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Success progress: #('.$progress->name.') approved');
    }

    public function decline(Request $request) {
        $progress = Progress::find($request->progress_id);
        $progress->update([
            'status' => '2',
            'comment' => $request['comment'],
        ]);
        return empty($progress) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Success progress: #('.$progress->name.') approved');
    }
}
