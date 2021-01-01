{{-- ini view yang nunjukin detail dari student  --}}
{{-- student.user.show, auth:id() --}}
{{-- disini include card.info, card.detail, card.cv, table.project, table.task --}}
@extends('layouts.app')
@section('content')

    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-0 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('student.dashboard') }}"><span
                                class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item">My Profile</li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('student.user.show', Auth::id()) }}">{{ $user->detailable->nim }}</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="row mb-3">
        @include('student.student.card.info')
        @include('student.student.card.detail')
    </div>

    @include('student.student.table.project')

    <div class="row mb-4 pb-4">
        <div class="col-12">
            <div class="d-lg-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                <form action="{{ route('student.export') }}" method="get">
                    <a class="btn btn-secondary">
                        <span class="fas fa-file-export mr-2"></span>Export Task
                    </a>
                </form>
            </div>
            @include('student.student.table.task')
        </div>
    </div>
@endsection
