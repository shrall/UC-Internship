{{-- ini view yang ngeluarin detail dari task  --}}
{{-- routenya supervisor.task.show, task->id  --}}

{{-- disini include card.detail, card.pic, table.progress --}}
@extends('supervisor.layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item"><a href="{{ route('supervisor.dashboard') }}"><span
                                class="fas fa-home"></span></a></li>
                    <li class="breadcrumb-item active">Projects</li>
                    <li class="breadcrumb-item active"><a
                            href="{{ route('supervisor.project.index') }}">Project List</a></li>
                    <li class="breadcrumb-item active"><a
                            href="{{ route('supervisor.project.show', 1) }}">201901001</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                            href="{{ route('supervisor.task.show', 1) }}">Design Assets</a></li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-6">
            @include("supervisor.task.card.detail")
        </div>
        <div class="col-12 col-lg-6">
            @include("supervisor.task.card.pic")
        </div>
    </div>
    <div class="row mb-3">
        <h2 class="h4"><span class="fa fa-spinner"></span> Progress List</h2>
        @include('staff.project.inc.table.progress')
    </div>
@endsection
