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
                <li class="breadcrumb-item active">
                    <a href="{{ route('admin.student.index') }}">Student List</a>
                </li>
            </ol>
        </nav>
        <h2 class="h4">
            <span class="fa fa-users mr-2"></span>Student List
        </h2>
    </div>
</div>
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-4">
    <div>
        <a class="btn btn-secondary text-dark mr-2 dropdown-toggle"
            href="{{ route('admin.student.create') }}">
            <span class="fas fa-plus mr-2"></span>New
        </a>
    </div>
</div>
@include('admin.user.student.table.student')
@endsection
