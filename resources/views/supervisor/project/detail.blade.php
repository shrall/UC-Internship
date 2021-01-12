@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('supervisor.dashboard') }}"><span
                                class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item active">Projects</li>
                    <li class="breadcrumb-item active"><a href="{{ route('supervisor.project.index') }}">Project List</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                            href="{{ route('supervisor.project.show', $project->id) }}">{{$project->id}}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mb-4">
        @include("supervisor.project.card.detail")
        @include("supervisor.project.card.supervisor")
    </div>
    @include('supervisor.project.table.student')
    @include('supervisor.project.table.task')
@endsection
