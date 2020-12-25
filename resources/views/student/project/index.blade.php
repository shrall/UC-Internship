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
    <div class="row mb-3">
        <h2 class="h4 mb-3">
            <span class="fa fa-clipboard-list"></span> Project List
        </h2>
        @include('student.project.table.project')
    </div>
    <div class="row mb-3">
        <h2 class="h4 mb-3">
            <span class="fa fa-share-square"></span> Applied Projects
        </h2>
        @include('student.project.table.applied')
    </div>
@endsection
