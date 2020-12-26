@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="{{ route('supervisor.dashboard') }}"><span
                                    class="fas fa-home"></span></a></li>
                        <li class="breadcrumb-item active">Projects</li>
                        <li class="breadcrumb-item active"><a
                                href="{{ route('supervisor.project.index') }}">Project List</a></li>
{{--                        <li class="breadcrumb-item active"><a--}}
{{--                                href="{{ route('supervisor.project.show', $project->id) }}">201901001</a></li>--}}
                        <li class="breadcrumb-item active" aria-current="page"><a
                                href="{{ route('supervisor.task.show', $task->id) }}">Design Assets</a></li>
                        <li class="breadcrumb-item active" aria-current="page"><a
                                href="{{ route('supervisor.task.show', $task->id) }}">Add Task</a></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('supervisor.task.create', $task->id) }}" method="POST">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">Add New Task</h2>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="task_name"><span class="fa fa-tasks"></span> Task Name</label>
                                <input class="form-control" id="task_name" type="text" placeholder="Task Name" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="project"><span class="fa fa-clipboard-list"></span> Project</label>
                            <select class="form-select w-100 mb-0" id="project" name="project"
                                    aria-label="Category select example">
                                <option value="iddariprojectnya" selected="selected">Valentine's Day
                                </option>
                                <option value="iddariprojectnya">8th NPLC</option>
                                <option value=iddariprojectnya">Entrepreneurship Essentials</option>
                                <option value="iddariprojectnya">Mobile App Development</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="task_description"><span class="fa fa-align-justify"></span> Task Description</label>
                                <textarea class="form-control" id="task_description" name="task_description" placeholder="Description"
                                          required></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="description"><span class="fa fa-user"></span> Student In-Charge</label>
                                <select class="form-select w-100 mb-0" id="project" name="student"
                                        aria-label="Student select example">
                                    <option value="iddaristudentnya" selected="selected">Tinara Nathania Wiryonoputro
                                    </option>
                                    <option value="iddaristudentnya">Marshall Ovierdo</option>
                                    <option value=iddaristudentnya">Michelle Alexandra Dinata</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <h2 class="h5 mb-4">Upload Attachments</h2>
                    <div class="d-xl-flex align-items-center">
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ml-xl-3">
                                <div class="d-flex">
                                <span class="icon icon-md">
                                    <span class="fas fa-paperclip mr-3"></span>
                                </span>
                                    <input type="file">
                                    <div class="d-md-block text-left">
                                        <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose File</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Add New Task</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
