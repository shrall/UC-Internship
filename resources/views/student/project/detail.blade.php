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
    <div class="row mt-2">
        <div class="col-12 col-lg-6">
            <div class="card border-light shadow-sm text-center pt-3 pb-4 mb-4 mb-lg-0">
                <div class="card-body">
                    @foreach(Auth::User()->projectusers as $pu)
                    <h2 class="display-3 mb-2">{{ $pu->project->name }}</h2>
                    <div class="medium font-weight-bold mt-1">{{ $pu->project->id }}</div>
                    <div class="medium mt-1"> {{ $pu->project->description }}</div>
                    <div class="medium font-weight-bold mt-1 text-primary">Category :
                        @if($pu->project->category == "0")
                            <span class="fas fa-calendar-week"></span>
                            <span> Event</span>
                        @endif

                        @if($pu->project->category == "1")
                            <span class="fas fa-school"></span>
                            <span> Education</span>
                        @endif

                        @if($pu->project->category == "2")
                            <span class="fas fa-question-circle"></span>
                            <span> Other</span>
                        @endif
                    </div>
                    <div class="medium font-weight-bold mt-1 text-warning"><span class="fa fa-hourglass-half"></span>
                        {{ $pu->project->deadline }}
                    </div>
                    <div class="medium mt-1">
                        @if($pu->project->status == "0")
                            <span class="fas fa-clock text-info"></span>
                            <span
                                class="font-weight-bold text-info">
                                    Available</span>
                        @endif

                        @if($pu->project->status == "1")
                            <span class="fas fa-clock text-warning"></span>
                            <span
                                class="font-weight-bold text-warning">
                                    Ongoing</span>
                        @endif

                        @if($pu->project->status == "2")
                            <span class="fas fa-check text-success"></span>
                            <span
                                class="font-weight-bold text-success">
                                    Completed</span>
                        @endif

                        @if($pu->project->status == "3")
                            <span class="fas fa-ban text-danger"></span>
                            <span
                                class="font-weight-bold text-danger">
                                    Suspended</span>
                        @endif
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        @include('student.project.card.supervisor')

        <div class="row mb-3">
            <h2 class="h4"><span class="fa fa-user"></span> Student List</h2>
            @include('student.project.table.student')
        </div>
        <div class="row mb-3">
            <h2 class="h4"><span class="fa fa-tasks"></span> Task List</h2>
            @include('student.project.table.task')
        </div>
@endsection
