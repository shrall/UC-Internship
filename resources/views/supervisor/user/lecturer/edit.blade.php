@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 col-xl-8">
            <form action="{{ route('supervisor.user.update', $lecturer->id) }}" method="POST" enctype="multipart/form-data">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">General information</h2>
                    @csrf
                    <input name="_method" type="hidden" value="PATCH">
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="password"><span class="fab fa-password"></span> Password</label>
                            <input class="form-control" id="password" name="password" type="text"
                                placeholder="Leave blank if you do not wish to change your password.">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone"><span class="fab fa-whatsapp"></span> Phone Number</label>
                            <input class="form-control" id="phone" name="phone" type="number" placeholder="Phone Number"
                                value="{{ $lecturer->detailable->phone }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Line"><span class="fab fa-line"></span> Line</label>
                            <input class="form-control" id="line_account" name="line_account" type="text"
                                placeholder="Enter your line address" value="{{ $lecturer->detailable->line_account }}"
                                required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <h2 class="h5 mb-4">Select profile photo</h2>
                            <div class="d-xl-flex align-items-center mb-4">
                                <div class="file-field">
                                    <div class="d-flex justify-content-xl-center ml-xl-3">
                                        <div class="d-flex">
                                            <span class="icon icon-md">
                                                <span class="fas fa-paperclip mr-3"></span>
                                            </span>
                                            <input type="file" id="photo" name="photo">
                                            <div class="d-md-block text-left">
                                                @if ($lecturer->detailable->photo == null)
                                                    <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose
                                                        Image
                                                    </div>
                                                @else
                                                    <div class="font-weight-normal text-dark mb-1" id="pp-name">
                                                        {{ $lecturer->detailable->photo }}
                                                    </div>
                                                @endif
                                                <div class="text-gray small">JPG or PNG.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 col-xl-4">
            <div class="row">
                <div class="col-12 mb-0">
                    <div class="card border-light text-center p-0">
                        <div class="profile-cover rounded-top"
                            data-background="{{ asset('assets/img/profile-cover.jpg') }}"></div>
                        <div class="card-body pb-5">
                            @if ($lecturer->detailable->photo != null)
                                <img src="{{ asset('profile_picture/supervisor/' . $lecturer->detailable->photo) }}"
                                    class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4"
                                    alt="Profile Picture">
                            @else
                                <img src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                                    class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4"
                                    alt="Profile Picture">
                            @endif
                            <h4 class="h3">{{ $lecturer->detailable->name }}</h4>
                            <h4 class="h3">{{ $lecturer->detailable->title->name }}</h4>
                            <p class="text-gray mb-4">{{ $lecturer->detailable->department->name }}
                                ({{ $lecturer->detailable->department->initial }})</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
