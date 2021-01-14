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
                        <a href="{{ route('admin.scholarship.create') }}">Create New Scholarship</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <form action="{{ route('admin.scholarship.store') }}" method="POST">
            <div class="card card-body bg-white border-light shadow-sm mb-4">
                <h2 class="h5 mb-4">Add New Scholarship</h2>
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="scholarship_name">Scholarship Name</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Name" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="grade">Grade</label>
                        <select class="form-select w-100 mb-0" id="grade" name="grade">
                            <option value="A" selected="selected">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="duration">Duration</label>
                        <select class="form-select w-100 mb-0" id="duration" name="duration">
                            <option value="1" selected>1 Year</option>
                            <option value="2">2 Years</option>
                            <option value="3">3 Years</option>
                            <option value="4">4 Years</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="minimum_gpa"> Min. GPA</label>
                            <input class="form-control" id="minimum_gpa" name="minimum_gpa" type="number" step="0.01" max="4.00" placeholder="Minimum GPA" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="hps">Hour per Semester</label>
                            <input class="form-control" id="hps" name="hps" type="number" placeholder="Hours" required>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Add Scholarship</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
