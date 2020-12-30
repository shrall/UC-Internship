{{-- ini view yang nunjukin detail dari staff  --}}
{{-- student.user.show, user->id --}}
{{-- disini include card.info, card.detail, table.project --}}

{{-- PLEK sama detail yang di student.student.detail  --}}
@extends('layouts.app')
@section('content')
    <div class="row mb-3">
        <div class="col-12 col-xl-8">
            <div class="card card-body bg-white border-light shadow-sm mb-4">
                <h2 class="h4 mb-4">General information</h2>
                <form>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="full_name">Full Name</label>
                                <h2 class="h5 mb-4">{{$staff->detailable->name}}</h2>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="nim">NIP</label>
                                <h2 class="h5 mb-4">{{$staff->detailable->nip}}</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="email"><span class="fa fa-envelope"></span> E-Mail</label>
                            <h2 class="h5 mb-4">{{$staff->detailable->email}}</h2>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email"><span class="fab fa-whatsapp"></span> Phone Number</label>
                            <h2 class="h5 mb-4">{{$staff->detailable->phone}}</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email"><span class="fa fa-map-marker-alt"></span> Line ID:</label>
                            <h2 class="h5 mb-4">{{$staff->detailable->line_account}}</h2>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email"><span class="fa fa-clock"></span> Ongoing Projects</label>
                            <h2 class="h5 mb-4">...</h2>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-4">
                    <div class="card border-light text-center p-0">
                        <div class="profile-cover rounded-top"
                             data-background="{{ asset('assets/img/profile-cover.jpg') }}"></div>
                        <div class="card-body pb-5"><img
                                src="{{ asset('assets/img/team/profile-picture-3.jpg') }}"
                                class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">{{$staff->detailable->name}}</h4>
                            <h4 class="h3">{{$staff->detailable->title->name}}</h4>
{{--                            <h5 class="font-weight-normal">Head Department</h5>--}}
                            <p class="text-gray mb-4">{{$staff->detailable->department->name}} ({{$staff->detailable->department->initial}})</p>
                            <a class="btn btn-sm btn-primary" href="{{ route('supervisor.staff.edit', $staff->id) }}">
                                <span class="fa fa-edit"></span> Edit Profile
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            @include('supervisor.user.staff.table.project')
        </div>
    </div>
@endsection
