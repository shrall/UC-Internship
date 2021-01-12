@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4"><span class="fas fa-home mr-2"></span>Dashboard</h2>
            <p class="mb-0">{{ date('jS, M Y') }}</p>
        </div>
    </div>
    @include('supervisor.table.project')
    @include('supervisor.table.progress')
@endsection
