@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-0 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('supervisor.dashboard') }}"><span
                                class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item active">Users</li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('supervisor.student.index') }}">Student List</a>
                    </li>
                </ol>
            </nav>
            <h2 class="h4">
                <span class="fa fa-users"></span> Student List
            </h2>
        </div>
    </div>
    @include('supervisor.user.student.table.student')
@endsection
