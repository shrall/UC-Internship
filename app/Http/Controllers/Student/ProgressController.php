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

        //disini dia cari task id (kita mencari status project melalui task id yang sudah kita dapatkan)
        $task = Task::find($request['task_id']);
//        dd($task);

        //disini kita dari task menuju status project melalui projectuser (SELALU CEK MODEL UNTUK HUBUNGAN)
        if ($task->projectuser->project->status == '3'){
            return redirect()->back();
        }

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

        //klo status project suspend maka lgs mental
        if ($progress->task->projectuser->project->status == '3'){
            return redirect()->back();
        }

        //update progress
        if ($progress->status == '0') {
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
                }
            }
            return redirect()->route('student.task.show', $data['task_id']);
        }else{


            return redirect()->route('student.task.show', $progress->task_id);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Progress $progress
     * @return \Illuminate\Http\Response
     */
    public function destroy(Progress $progress)
    {

        //klo status project suspend maka lgs mental
        if ($progress->task->projectuser->project->status == '3'){
            return redirect()->back();
        }

        if ($progress->status == '0') {
            foreach ($progress->attachments as $attachment){
                $attachment->delete();
            }
            $progress->delete();
            return redirect()->back();
        }else{
            return redirect()->back();
        }
    }
}
