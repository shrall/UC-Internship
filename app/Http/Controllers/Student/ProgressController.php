<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use App\Models\Progress;
use App\Models\ProgressAttachment;
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
        //krn modal ga perlu return view kesini
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //create progress :v
        //uplod attachment

//        dd($request);

        $data = $request->validate([
            'description' => 'required|string',
            'time_start' => 'required',
            'time_end' => 'required',
            'task_id' => 'required'
        ]);

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
        //krn modal ga perlu return view kesini
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

        //update progress
        $data = $request->validate([
            'description' => 'required|string',
            'time_start' => 'required',
            'time_end' => 'required',
            'task_id' => 'required'
        ]);

        $progress->update([
            'description' => $data['description'],
            'time_start' => $data['time_start'],
            'time_end' => $data['time_end'],
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
                if ($request['attachments'] == $file_name){
                    $request['attachments']::delete($file_name);
                }
            }
        }

        return redirect()->route('student.task.show', $data['task_id']);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Progress $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progress $progress)
    {
        $progress->delete();
        return redirect()->back();
    }
}
