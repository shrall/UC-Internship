@extends('layouts.app')
@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
    <div class="d-block mb-4 mb-md-0">
        <h2 class="h4"><span class="fas fa-home"></span> Dashboard</h2>
        <p class="mb-0">{{ date('jS, M Y') }}</p>
    </div>
</div>
<div class="row">
    <div class="col-12 col-xl-8 mb-4">
        @include('student.widgets.task')
    </div>
    <div class="col-12 col-xl-4 mb-2">
        @include('student.widgets.offer')
        @include('student.widgets.project')
        @include('student.widgets.time')
    </div>
</div>

@endsection
