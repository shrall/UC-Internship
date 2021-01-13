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
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.scholarship.show', $scholarship->id) }}">{{ $scholarship->name }}
                                - Grade ({{ $scholarship->grade }})</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('admin.scholarship.edit', $scholarship->id) }}">Edit
                                Scholarship</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.scholarship.update', $scholarship->id) }}" method="POST">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">Edit Scholarship</h2>
                    @csrf
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <div>
                                <label for="scholarship_name">Scholarship Name</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Name"
                                    value="{{ $scholarship->name }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="grade">Grade</label>
                            <select class="form-select w-100 mb-0" id="grade" name="grade">
                                <option value="A" @if ($scholarship->grade == 'A') selected
                                    @endif>A</option>
                                <option value="B" @if ($scholarship->grade == 'B') selected
                                    @endif>B</option>
                                <option value="C" @if ($scholarship->grade == 'C') selected
                                    @endif>C</option>
                                <option value="D" @if ($scholarship->grade == 'D') selected
                                    @endif>D</option>
                                <option value="E" @if ($scholarship->grade == 'E') selected
                                    @endif>E</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="duration">Duration</label>
                            <select class="form-select w-100 mb-0" id="duration" name="duration">
                                <option value="1" @if ($scholarship->duration == 1)
                                    selected @endif>1 Year</option>
                                <option value="2" @if ($scholarship->duration == 2)
                                    selected @endif>2 Years</option>
                                <option value="3" @if ($scholarship->duration == 3)
                                    selected @endif>3 Years</option>
                                <option value="4" @if ($scholarship->duration == 4)
                                    selected @endif">4 Years</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="minimum_gpa"> Min. GPA</label>
                                <input class="form-control" id="minimum_gpa" name="minimum_gpa" type="number" step="0.01"
                                    max="4.00" placeholder="Minimum GPA" value="{{ $scholarship->minimum_gpa }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="hps">Hour per Semester</label>
                                <input class="form-control" id="hps" name="hps" type="number" placeholder="Hours"
                                    value="{{ $scholarship->hps }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Update Scholarship</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
