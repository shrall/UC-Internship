@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-0 mb-md-0">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">
                        <span class="fas fa-home"></span>
                    </a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.student.index') }}">Student List</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                    <a
                        href="{{ route('admin.student.show', $student->id) }}">{{ $student->detailable->nim }}</a>
                </li>
            </ol>
        </nav>
        <h2 class="h4">
            <span class="fa fa-user mr-2"></span>Student Profile
        </h2>
    </div>
</div>
@if(session('Success'))
<div class="row">
    <div class="col-12">
        <div class="alert alert-success" role="alert">
            {{ session('Success') }}
        </div>
    </div>
</div>
@endif
<div class="row mb-3">
    @include('admin.user.student.card.detail')
    @include('admin.user.student.card.info')
</div>
@include('admin.user.student.table.project')
@endsection
