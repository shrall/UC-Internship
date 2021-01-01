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
                    <a
                        href="{{ route('student.user.show', Auth::id()) }}">{{ $user->detailable->nim }}</a>
                </li>
            </ol>
        </nav>
    </div>
</div>
<div class="row mb-3">
    @include('student.user.student.card.info')
    @include('student.user.student.card.detail')
</div>
@include('student.user.student.table.project')
@include('student.user.student.table.task')
@endsection
