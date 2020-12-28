{{-- ini view yang nunjukin detail dari lecturer  --}}
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
                                <h2 class="h5 mb-4">Ida Kristin Sianipar, S.Th., M.M.</h2>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="nim">NIK</label>
                                <h2 class="h5 mb-4">20080050</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-3">
                            <label for="email"><span class="fa fa-envelope"></span> E-Mail</label>
                            <h2 class="h5 mb-4">ida.kristin@ciputra.ac.id</h2>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email"><span class="fab fa-whatsapp"></span> Phone Number</label>
                            <h2 class="h5 mb-4">08123456789</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email"><span class="fa fa-map-marker-alt"></span> Address</label>
                            <h2 class="h5 mb-4">CitraLand CBD Boulevard, Surabaya, East Java</h2>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="email"><span class="fa fa-clock"></span> Ongoing Projects</label>
                            <h2 class="h5 mb-4">2 Projects</h2>
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
                            <h4 class="h3">Ida Kristin Sianipar, S.Th., M.M.</h4>
                            <h5 class="font-weight-normal">Head Department</h5>
                            <p class="text-gray mb-4">Student and Alumni Affairs (BMA)</p>
                            <a class="btn btn-sm btn-primary" href="{{ route('staff.user.edit', 1) }}">
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
            <h2 class="h4"><span class="fa fa-clipboard-list"></span> Project List</h2>
            @include('staff.project.table.project')
        </div>
    </div>
@endsection
