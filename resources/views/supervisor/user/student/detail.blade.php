@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-0 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('supervisor.dashboard') }}">
                            <span class="fas fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('supervisor.student.index') }}">Student List</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('supervisor.student.show', $student->id) }}">{{ $student->detailable->nim }}</a>
                    </li>
                </ol>
            </nav>
            <h2 class="h4">
                <span class="fa fa-user mr-2"></span>Student Profile
            </h2>
        </div>
    </div>
    <div class="row mb-3">
        @include('supervisor.user.student.card.detail')
        @include('supervisor.user.student.card.info')
    </div>
    @include('supervisor.user.student.table.project')
@endsection
