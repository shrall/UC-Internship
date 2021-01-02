{{-- ini view yang nunjukin detail dari lecturer  --}}
{{-- student.user.show, user->id --}}
{{-- disini include card.info, card.detail, table.project --}}

{{-- PLEK sama detail yang di student.student.detail  --}}
@extends('layouts.app')
@section('content')
    <div class="row mb-3">
        <div class="col-12 col-xl-8">
            @include('supervisor.user.lecturer.card.info')
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">

                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @include('supervisor.user.lecturer.table.project')
        </div>
    </div>
@endsection
