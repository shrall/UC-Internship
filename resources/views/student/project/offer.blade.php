{{-- ini view yang ada card view offer --}}
{{-- student.project.offer --}}
{{-- disini include card.offer  --}}
@extends('layouts.app')
@section('content')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <h2 class="h4"><span class="fas fa-clipboard-list"></span> Project Offers</h2>
        </div>
    </div>
    <div class="d-lg-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="col-12 col-lg-6 px-0">
            <div class="mb-0">
                <div class="input-group">
                <span class="input-group-text" id="basic-addon3">
                    <span class="fas fa-search"></span></span>
                    <input type="text" class="form-control" id="searchoffer" placeholder="Search"
                           onkeyup="searchOffer()">
                </div>
            </div>
        </div>
    </div>
    {{--    ambil smua project yang belum di apply oleh student--}}
    @foreach($projects as $project)
        @include('student.project.card.offer')
    @endforeach
@endsection
