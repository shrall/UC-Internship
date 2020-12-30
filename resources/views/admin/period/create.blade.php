@extends('layouts.app')
@section('content')
<div class="row">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><span
                                class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item">Period</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.period.index') }}">Period List</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.period.create') }}">Create New Period</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@if(session('Error'))
<div class="row">
    <div class="col-12">
        <div class="alert alert-danger" role="alert">
            {{ session('Error') }}
        </div>
    </div>
</div>
@endif
<div class="row">
    <div class="col-12">
        <form action="{{ route('admin.period.store') }}" method="POST">
            <div class="card card-body bg-white border-light shadow-sm mb-4">
                <h2 class="h5 mb-4">Add New Period</h2>
                @csrf
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="term">Term</label>
                            <select class="form-select w-100 mb-0" name="term" id="term" required>
                                <option value="0" selected>Odd</option>
                                <option value="1">Even</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="period_start">Period Start</label>
                            <input class="form-control" id="period_start" type="date" name="start" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="period_end">Period End</label>
                            <input class="form-control" id="period_end" type="date" name="end" required>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Create Period</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
