@extends('layouts.app')
@section('content')
<div class="row">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-4">
        <div class="d-block mb-4 mb-md-0">
            <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.dashboard') }}">
                            <span class="fas fa-home"></span>
                        </a>
                    </li>
                    <li class="breadcrumb-item">Period</li>
                    <li class="breadcrumb-item">
                        <a href="{{ route('admin.period.index') }}">Period List</a>
                    </li>

                    @if($period->term == 0)
                        <li class="breadcrumb-item">
                            {{ date("Y", strtotime($period->start)) }}-{{ idate("Y", strtotime($period->start))+1 }}
                            / Odd
                        </li>
                    @else
                        <li class="breadcrumb-item">
                            {{ idate("Y", strtotime($period->end))-1 }}-{{ date("Y", strtotime($period->end)) }}
                            / Even
                        </li>
                    @endif
                    <li class="breadcrumb-item active" aria-current="page">
                        <a href="{{ route('admin.period.edit', $period->id) }}">Edit
                            Period</a>
                    </li>
                </ol>
            </nav>
        </div>
    </div>
</div>
@if(session('Error'))
    <div class="row">
        <div class="col-12">
            <div class="alert alert-danger" role="alert">
                {{ session('Error') }}
            </div>
        </div>
    </div>
@endif
<div class="row">
    <div class="col-12">
        <form action="{{ route('admin.period.update', $period->id) }}" method="POST">
            <div class="card card-body bg-white border-light shadow-sm mb-4">
                <h2 class="h5 mb-4">Edit Period</h2>
                @csrf
                <input name="_method" type="hidden" value="PATCH">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <div>
                            <label for="term">Term</label>
                            <select class="form-select w-100 mb-0" name="term" id="term" required>
                                @if($period->term == '0')
                                    <option value="0" selected>Odd</option>
                                    <option value="1">Even</option>
                                @endif
                                @if($period->term == '1')
                                    <option value="0">Odd</option>
                                    <option value="1" selected>Even</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="period_start">Period Start</label>
                            <input class="form-control" id="period_start" type="date" name="start" value="{{$period->start}}" required>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div>
                            <label for="period_end">Period End</label>
                            <input class="form-control" id="period_end" type="date" name="end" value="{{$period->end}}" required>
                        </div>
                    </div>
                </div>
                <div class="mt-3">
                    <button type="submit" class="btn btn-primary">Edit Period</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
