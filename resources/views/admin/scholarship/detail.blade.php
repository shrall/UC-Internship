@extends('layouts.app')
@section('content')
<div class="row">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <span class="fas fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Scholarships</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.scholarship.index') }}">Scholarship List</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.scholarship.show', $scholarship->id) }}">{{$scholarship->name}} - Grade ({{$scholarship->grade}})</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row mb-3">
    <div class="col-12">
        <div class="card card-body bg-white border-light shadow-sm mb-4">
            <h2 class="h4 mb-4">General information</h2>
            <form>
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <label for="scholarship_name">Scholarship Name</label>
                            <h2 class="h5 mb-4">{{ $scholarship->name }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div>
                            <label for="grade">Grade</label>
                            <h2 class="h5 mb-4">{{ $scholarship->grade }}</h2>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="duration">Duration</label>
                        <h2 class="h5 mb-4">{{ $scholarship->duration }} Year</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <label for="email">Min. GPA</label>
                        <h2 class="h5 mb-4">{{ $scholarship->minimum_gpa }}</h2>
                    </div>
                    <div class="col-md-6">
                        <label for="email">Hour per Semester</label>
                        <h2 class="h5 mb-4">{{ $scholarship->hps }} Hours</h2>
                    </div>
                </div>
                <div class="row">
                    <div>
                        <a class="btn btn-lg btn-primary"
                            href="{{ route('admin.scholarship.edit', $scholarship->id) }}">
                            <span class="fas fa-edit mr-2"></span>Edit
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('admin.scholarship.table.student')
@endsection
