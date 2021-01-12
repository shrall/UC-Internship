@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('supervisor.dashboard') }}">
                            <span class="fas fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Projects</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('supervisor.project.index') }}">Project List</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                        <a
                            href="{{ route('supervisor.project.show', $task->projectuser->uci_project_id) }}">{{ $task->projectuser->uci_project_id }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('supervisor.task.show', $task->id) }}">{{ $task->name }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-2">
        @include('supervisor.task.card.detail')
        @include('supervisor.task.card.pic')
    </div>
    @include('supervisor.task.table.progress')
@endsection
