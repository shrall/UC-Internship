{{-- ini edit profile  --}}
{{-- student.user.edit, auth::id() --}}

{{-- tambahin edit password --}}
{{-- hapus edit title  --}}
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 col-xl-8">
            <form action="{{ route('student.user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">General information</h2>
                    @csrf

                    <input name="_method" type="hidden" value="PATCH">
                    <input type="hidden" name="user" value="{{$user->id}}">

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone"><span class="fab fa-whatsapp"></span> Phone Number</label>
                            <input class="form-control" id="phone" name="phone" type="number" placeholder="Phone Number"
                                   value="{{ $user->detailable->phone }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="Line"><span class="fab fa-line"></span> Line</label>
                            <input class="form-control" id="line_account" name="line_account" type="text"
                                   placeholder="Enter your line address"
                                   value="{{ $user->detailable->line_account }}" required>
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
                                                @if ($user->detailable->photo == null)
                                                    <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose
                                                        Image
                                                    </div>
                                                @else
                                                    <div class="font-weight-normal text-dark mb-1"
                                                         id="pp-name">{{$user->detailable->photo}}</div>
                                                @endif
                                                <div class="text-gray small">JPG or PNG.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <h2 class="h5 mb-4">Portfolio and CV</h2>
                            <div class="d-xl-flex align-items-center">
                                <div class="file-field">
                                    <div class="d-flex justify-content-xl-center ml-xl-3">
                                        <div class="d-flex">
                                <span class="icon icon-md">
                                    <span class="fas fa-file-pdf mr-3"></span>
                                </span>
                                            <input type="file" name="cv" id="cv">
                                            <div class="d-md-block text-left">
                                                <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose File</div>
                                                <div class="text-gray small">PDF Max size of 800K</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                <div class="col-12 mb-4">
                    <div class="card border-light text-center p-0">
                        <div class="profile-cover rounded-top"
                             data-background="{{ asset('assets/img/profile-cover.jpg') }}"></div>
                        <div class="card-body pb-5"><img
                                src="{{ asset('assets/img/team/profile-picture-1.jpg') }}"
                                class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">
                                <a href="{{ route('admin.student.show', 1) }}"></a> {{ $user->detailable->name }}
                            </h4>
                            <p class="text-gray mb-0">{{ $user->detailable->nim }}</p>
                            <p class="text-gray mb-0">{{ $user->detailable->email }}</p>
                            <p class="text-gray mb-0">GPA : {{ number_format((float)$user->info->gpa, 2, '.', '') }}</p>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                </div>
            </div>
        </div>
    </div>

    <script>
        $('input:file').change(
            function (e) {
                document.getElementById("pp-name").innerHTML = e.target.files[0].fileName;

                // ini jquery
                // $( ".pp-name" ).html(e.target.files[0].fileName);
            });
    </script>
@endsection
