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
                    <li class="breadcrumb-item" >
                        <a href="{{ route('admin.staff.index') }}">Staff List</a>
                    </li>
                    <li class="breadcrumb-item">
                        <a
                            href="{{ route('admin.staff.show', $staff->id) }}">{{ $staff->detailable->nip }}</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.staff.edit', $staff->id) }}">Edit Staff</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@if($errors->any())
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{$error}}
    </div>
    @endforeach
@endif
<div class="row">
    <div class="col-12">
        <form action="{{ route('admin.staff.update', $staff->id) }}" method="POST" enctype="multipart/form-data">
            <div class="card card-body bg-white border-light shadow-sm mb-4">
                <h2 class="h5 mb-4">Edit Staff</h2>
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="full_name">Full Name</label>
                            <input class="form-control" id="name" name="name" type="text" placeholder="Full Name" value="{{$staff->detailable->name}}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="nip">NIP</label>
                        <input class="form-control" id="nip" name="nip" type="number" placeholder="NIP" value="{{$staff->detailable->nip}}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="gender"><span class="fa fa-venus-mars mr-2"></span>Gender</label>
                        <select class="form-select w-100 mb-0" id="gender" name="gender">
                            <option value="M" @if ($staff->detailable->gender == 'M')selected @endif >Male</option>
                            <option value="F" @if ($staff->detailable->gender == 'F')selected @endif >Female</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="email"><span class="fa fa-envelope mr-2"></span>E-Mail</label>
                            <input class="form-control" id="email" name="email" type="text" placeholder="E-Mail" value="{{$staff->detailable->email}}" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="password"><span class="fa fa-key mr-2"></span>Password *<span class="text-muted">leave blank if you don't want to change it</span></label>
                            <input class="form-control" id="password" name="password" type="password" placeholder="Password">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="phone"><span class="fab fa-whatsapp mr-2"></span>Phone Number</label>
                        <input class="form-control" id="phone" name="phone" type="number" placeholder="Phone Number" value="{{$staff->detailable->phone}}"required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="line_account"><span class="fab fa-line mr-2"></span>Line ID</label>
                        <input class="form-control" id="line_account" name="line_account" type="text" placeholder="Line ID" value="{{$staff->detailable->line_account}}"required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="department"><span class="fa fa-building mr-2"></span>Department</label>
                        <select class="form-select w-100 mb-0" id="department" name="department">
                            @foreach ($departments->sortBy('name') as $department)
                                <option value="{{$department->id}}" @if ($staff->detailable->department_id == $department->id)selected @endif>{{$department->name}} ({{$department->initial}})
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="title"><span class="fa fa-user-edit"></span> Title</label>
                        <select class="form-select w-100 mb-0" id="title" name="title">
                            @foreach ($titles->sortBy('name') as $title)
                                <option value="{{$title->id}}" @if ($staff->detailable->title_id == $title->id)selected @endif>{{$title->name}}
                                </option>
                            @endforeach
                        </select>
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
                                    @if ($staff->detailable->photo == null)
                                    <div class="font-weight-normal text-dark mb-1" id="pp-name">Choose Image</div>
                                    @else
                                    <div class="font-weight-normal text-dark mb-1" id="pp-name">{{$staff->detailable->photo}}</div>
                                    @endif
                                    <div class="text-gray small">JPG or PNG.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Update Staff</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
