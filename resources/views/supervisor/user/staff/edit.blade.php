{{-- ini sih ya edit :v  --}}

{{-- tambahin edit password --}}
{{-- hapus edit title  --}}
@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 col-xl-8">
            <form action="{{ route('supervisor.staff.update', $staff->id) }}" method="POST">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">General information</h2>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="full_name">Full Name</label>
                                <input class="form-control" id="full_name" type="text" placeholder="Enter your first name"
                                       value="{{$staff->detailable->name}}" required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="phone"><span class="fab fa-whatsapp"></span> Phone Number</label>
                            <input class="form-control" id="phone" type="number" placeholder="Phone Number"
                                   value="{{$staff->detailable->phone}}" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mb-3">
                            <label for="email"><span class="fa fa-map-marker-alt"></span> Line ID</label>
                            <input class="form-control" id="address" type="text" placeholder="Enter your line id"
                                   value="{{$staff->detailable->line_account}}" required>
                        </div>
                    </div>
                    <h2 class="h5 mb-4">Select profile photo</h2>
                    <div class="d-xl-flex align-items-center">
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ml-xl-3">
                                <div class="d-flex">
                                <span class="icon icon-md">
                                    <span class="fas fa-paperclip mr-3"></span>
                                </span>
                                    <input type="file">
                                    <div class="d-md-block text-left">
                                        <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose Image</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 800K</div>
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
                                src="{{ asset('assets/img/team/profile-picture-3.jpg') }}"
                                class="user-avatar large-avatar rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                            <h4 class="h3">{{$staff->detailable->name}}</h4>
                            <h5 class="font-weight-normal">{{$staff->detailable->itle}}</h5>
                            <p class="text-gray mb-4">{{$staff->detailable->department->name}} ({{$staff->detailable->department->intial}})</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $('input:file').change(
            function(e){
                document.getElementById("pp-name").innerHTML = e.target.files[0].fileName;

            });
    </script>
@endsection
