{{-- ini view yang ngasih detail dari project yang di pilih  --}}
{{-- routenya student.project.show, project->id  --}}
{{-- include card.detail, card.supervisor, table.student, table.task  --}}

{{-- tambahin dimana gitu buat ngerubah status dari available jadi ongoing, ongoing jadi completed  --}}

@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('supervisor.dashboard') }}"><span
                                class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item active">Projects</li>
                    <li class="breadcrumb-item active"><a
                            href="{{ route('supervisor.project.index') }}">Project List</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                            href="{{ route('supervisor.project.show', $project->id) }}">201901001</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-6">
            @include("supervisor.project.card.detail")
        </div>
        <div class="col-12 col-lg-6">
            @include("supervisor.project.card.supervisor")
        </div>
    </div>
    <div class="row mb-3 pb-4 pt-4">
        <h2 class="h4"><span class="fa fa-user"></span> Student List</h2>
        @include('supervisor.project.table.student')
    </div>
    <div class="row mb-3">
        <div class="col-6"> <h2 class="h4"><span class="fa fa-tasks"></span> Task List</h2></div>
        <div class="col-6">
            <div class="d-flex justify-content-end flex-wrap flex-md-nowrap align-items-center pb-2">
                <div>
                    @include('supervisor.project.modal.task.create')
                    @include('supervisor.project.modal.task.edit')
                    <a class="btn btn-secondary text-dark mr-2 dropdown-toggle "
                       data-toggle="modal" data-target="#modal-add-task-{{$project->id}}">
                        <span class="fas fa-plus mr-2"></span>New
                    </a>
                </div>
            </div>
        </div>
        @include('supervisor.project.table.task')
    </div>
@endsection

