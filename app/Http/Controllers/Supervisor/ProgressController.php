<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Progress;
use App\Models\Task;
use Illuminate\Http\Request;

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
        $comment = $request['comment'];
        $progressapply = Progress::where('task_id', $progress->task_id)->where('id', $progress->id)->first();
        $progressapply->update([
            'status' => '1',
            'comment' => $comment,
        ]);

        return empty($progress) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Success progress: #('.$progress->name.') approved');
    }

    public function decline(Request $request) {
        $progress = Progress::find($request->progress_id);
        $comment = $request['comment'];
        $progressapply = Progress::where('task_id', $progress->task_id)->where('id', $progress->id)->first();
        $progressapply->update([
            'status' => '2',
            'comment' => $comment,
        ]);

        return empty($progress) ? redirect()->back()->with('Fail', "Failed to update status")
            : redirect()->back()->with('Success', 'Success progress: #('.$progress->name.') approved');
    }
}
