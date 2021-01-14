@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
            <div class="d-block mb-4 mb-md-0">
                <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                    <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><span
                                    class="fas fa-home"></span></a></li>
                        <li class="breadcrumb-item">Users</li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('admin.student.index') }}">Student List</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            <a href="{{ route('admin.student.create') }}">Add New Student</a>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div class="alert alert-danger" role="alert">
                {{ $error }}
            </div>
        @endforeach
    @endif
    <div class="row">
        <div class="col-12">
            <form action="{{ route('admin.student.store') }}" method="POST" enctype="multipart/form-data">
                <div class="card card-body bg-white border-light shadow-sm mb-4">
                    <h2 class="h5 mb-4">Add New Student</h2>
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="full_name">Full Name</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Full Name"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="nim">NIM</label>
                            <input class="form-control" id="nim" name="nim" type="number" placeholder="NIM" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="email"><span class="fa fa-envelope mr-2"></span>E-Mail</label>
                                <input class="form-control" id="email" name="email" type="text" placeholder="E-Mail"
                                    required>
                            </div>
                        </div>
                        <div class="col-md-6 mb-3">
                            <div>
                                <label for="password"><span class="fa fa-key mr-2"></span>Password</label>
                                <input class="form-control" id="password" name="password" type="password"
                                    placeholder="Password" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="phone"><span class="fab fa-whatsapp mr-2"></span>Phone Number</label>
                            <input class="form-control" id="phone" name="phone" type="number" placeholder="Phone Number"
                                required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="line_account"><span class="fab fa-line mr-2"></span>Line ID</label>
                            <input class="form-control" id="line_account" name="line_account" type="text"
                                placeholder="Line ID" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="gender"><span class="fa fa-venus-mars mr-2"></span>Gender</label>
                            <select class="form-select w-100 mb-0" id="gender" name="gender">
                                <option value="M" selected="selected">Male</option>
                                <option value="F">Female</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="batch"><span class="fa fa-portrait mr-2"></span>Batch</label>
                            <input class="form-control" id="batch" name="batch" type="number" placeholder="Year" min="2008"
                                max="{{ date('Y') }}" step="1" />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="department"><span class="fa fa-building"></span> Department</label>
                            <select class="form-select w-100 mb-0" id="department" name="department">
                                @foreach ($departments->sortBy('name') as $department)
                                    <option value="{{ $department->id }}" @if ($loop->iteration == 1) selected
                                @endif>{{ $department->name }} ({{ $department->initial }})
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="title"><span class="fa fa-user-edit"></span> Title</label>
                            <input class="form-control" id="title" name="title" type="text" placeholder="Title"
                                value="Student" disabled required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="scholarship"><span class="fa fa-book"></span> Scholarship</label>
                            <select class="form-select w-100 mb-0" id="scholarship" name="scholarship">
                                <option value="" selected>None</option>
                                @foreach ($scholarships->sortBy('name') as $scholarship)
                                    <option value="{{ $scholarship->id }}">{{ $scholarship->name }}
                                        ({{ $scholarship->grade }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="scholarship"><span class="fa fa-book"></span> Scholarship</label>
                                <select class="form-select w-100 mb-0" id="scholarship" name="scholarship">
                                    @foreach ($scholarships->sortBy('name') as $scholarship)
                                        @if ($scholarship->status != 1)
                                            <option value="{{ $scholarship->id }}" @if ($loop->iteration == 1) selected
                                        @endif>{{ $scholarship->name }} ({{ $scholarship->grade }})
                                        </option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="gpa"><span class="fa fa-graduation-cap mr-2"></span>GPA</label>
                                <input class="form-control" id="gpa" name="gpa" type="number" placeholder="GPA" step="0.01"
                                    required>
                            </div>
                        </div>
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
                                            <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose Image</div>
                                            <div class="text-gray small">JPG or PNG.</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">Add Student</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
@endsection
