{{-- ini view yang nunjukin project yang dipunya student & dia udah apply kemana aja --}}
{{-- student.project.index --}}
{{-- disini include table.project & table.applied  --}}
@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('student.dashboard') }}">
                            <span class="fas fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item active">Projects</li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('student.project.index') }}">Project List</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
        @include('student.project.table.project')
        @include('student.project.table.applied')
@endsection
