{{-- ini view yang nunjukin detail dari student  --}}
{{-- student.user.show, auth:id() --}}
{{-- disini include card.info, card.detail, card.cv, table.project, table.task --}}

@extends('student.layouts.app')
@section('content')
    <div class="row mb-3">
        @include('student.student.card.info')
    </div>
    <div class="row mb-4 pb-4">
        <div class="col-12">
            <h2 class="h4"><span class="fa fa-clipboard-list"></span> Project List</h2>
            @include('student.project.table.project')
        </div>
    </div>
    <div class="row mb-4 pb-4">
        <div class="col-12">

            <div class="d-lg-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
                <div class="col-12 col-lg-6 px-0">
                    <div class="mb-0">
                        <h2 class="h4"><span class="fa fa-tasks"></span> Task List</h2>
                    </div>
                </div>
                <form action="{{ route('student.export') }}" method="get">
                    <button type="submit" class="btn btn-sm btn-outline-primary">Export</button>
                </form>
            </div>

            @include('student.project.table.task')
        </div>
    </div>
@endsection
