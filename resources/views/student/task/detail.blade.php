@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="fas fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">Projects</li>
                <li class="breadcrumb-item">
                    <a href="{{ route('student.project.index') }}">Project List</a>
                </li>
                <li class="breadcrumb-item" aria-current="page">
                    <a
                        href="{{ route('student.project.show', $task->projectuser->uci_project_id) }}">{{ $task->projectuser->uci_project_id }}</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a style="font-weight: 700;"
                        href="{{ route('student.task.show', $task->id) }}">{{ $task->name }}</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="row mt-2">
    @include('student.task.card.detail')
    @include('student.task.card.pic')
</div>
@if(session('Error'))
<div class="row">
    <div class="col-12">
        <div class="alert alert-danger" role="alert">
            {{ session('Error') }}
        </div>
    </div>
</div>
@endif
@include('student.task.table.progress')
@endsection
