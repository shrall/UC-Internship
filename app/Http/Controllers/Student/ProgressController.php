<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Progress;
use App\Models\ProgressAttachment;
use Illuminate\Database\Eloquent\Builder;
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'description' => 'required|string',
            'time_start' => 'required',
            'time_end' => 'required',
            'task_id' => 'required'
        ]);
        if($data['time_end'] < $data['time_start']){
            return redirect()->route('student.task.show', $data['task_id'])->with('Error', 'Time Start must be earlier than Time End.');
        }
        $progresses = Progress::whereHas('task', function (Builder $query) {
            $query->whereHas('projectuser', function (Builder $query) {
                    $query->where('uci_user_id', Auth::id());
                });
        })->get();
        foreach ($progresses as $progresscheck) {
            if ($data['time_start'] >= $progresscheck->time_start && $data['time_start'] <= $progresscheck->time_end) {
                return redirect()->route('student.task.show', $data['task_id'])->with('Error', 'You already have a progress from ' . date('jS, F Y, H:i', strtotime($progresscheck->time_start)) . ' to ' . date('jS, F Y, H:i', strtotime($progresscheck->time_end)));
            }
            if ($data['time_end'] >= $progresscheck->time_start && $data['time_end'] <= $progresscheck->time_end) {
                return redirect()->route('student.task.show', $data['task_id'])->with('Error', 'You already have a progress from ' . date('jS, F Y, H:i', strtotime($progresscheck->time_start)) . ' to ' . date('jS, F Y, H:i', strtotime($progresscheck->time_end)));
            }
            if ($data['time_start'] <= $progresscheck->time_start && $data['time_end'] >= $progresscheck->time_end) {
                return redirect()->route('student.task.show', $data['task_id'])->with('Error', 'You already have a progress from ' . date('jS, F Y, H:i', strtotime($progresscheck->time_start)) . ' to ' . date('jS, F Y, H:i', strtotime($progresscheck->time_end)));
            }
        }
        $progress = Progress::create([
            'description' => $data['description'],
            'time_start' => $data['time_start'],
            'time_end' => $data['time_end'],
            'status' => '0',
            'task_id' => $data['task_id'],
        ]);
        if ($request['attachments'] != null) {
            $i = 0;
            foreach ($request->file('attachments') as $file) {
                $attachment = new ProgressAttachment;
                $file_name = time() . $i . '-' . $file->getClientOriginalName();
                $file->move(public_path('attachments\progress'), $file_name);
                $attachment->name = $file_name;
                $attachment->progress_id = $progress['id'];
                $attachment->save();
                $i++;
            }
        }
        return redirect()->route('student.task.show', $data['task_id']);
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Progress $progress
     * @return \Illuminate\Http\Response
     */
    public function show(Progress $progress)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Progress $progress
     * @return \Illuminate\Http\Response
     */
    public function edit(Progress $progress)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Progress $progress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Progress $progress)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Progress $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progress $progress)
    {
        if ($progress->task->projectuser->project->status == '3') {
            return redirect()->back();
        }
        if ($progress->status == '0') {
            foreach ($progress->attachments as $attachment) {
                $attachment->delete();
            }
            $progress->delete();
        }
        return redirect()->back();
    }
}
