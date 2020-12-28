{{-- ini yang nunjukin detail dari project --}}
{{-- student.project.show, project->id --}}
{{-- disini include table.student & table.task  --}}
@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}"><span
                                class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item active">Projects</li>
                    <li class="breadcrumb-item active"><a
                            href="{{ route('student.project.index') }}">Project List</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                            href="{{ route('student.project.show', 1) }}">Project Detail</a></li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row mb-4">
        @include('student.project.card.detail')
        @include('student.project.card.supervisor')

    </div>
        <div class="row mb-3">
            <h2 class="h4"><span class="fa fa-user"></span> Student List</h2>
            @include('student.project.table.student')
        </div>
        <div class="row mb-3">
            <h2 class="h4"><span class="fa fa-tasks"></span> Task List</h2>
            @include('student.project.table.task')
        </div>
@endsection
