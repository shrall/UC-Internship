@extends('layouts.app')
@section('content')
<!-- Section -->
<section class="d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
    <div class="container">
        <div class="row justify-content-center form-bg-image"
            data-background-lg="{{ asset('assets/img/illustrations/signin.svg') }}">
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <div class="text-center mb-3">
                        <img class="rounded" src="{{ asset('assets/img/logo_uc.png') }}"
                            alt="change avatar" width="150px">
                    </div>
                    <div class="text-center text-md-center mb-4 mt-md-0">
                        <h1 class="mb-0 h3">Sign in to our platform</h1>
                    </div>
                    @if(session('Error'))
                        <div class="alert alert-danger">
                            {{ session('Error') }}
                        </div>
                    @endif
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('login') }}" class="mt-4">
                        @csrf
                        <!-- Form -->
                        <div class="form-group mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon1">
                                    <span class="fas fa-envelope"></span>
                                </span>
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus
                                    placeholder="email@ciputra.ac.id">
                            </div>
                        </div>
                        <!-- End of Form -->
                        <div class="form-group">
                            <!-- Form -->
                            <div class="form-group mb-4">
                                <label for="password">Your Password</label>
                                <div class="input-group">
                                    <span class="input-group-text" id="basic-addon2">
                                        <span class="fas fa-unlock-alt"></span>
                                    </span>
                                    <input id="password" type="password" class="form-control" name="password" required
                                        autocomplete="current-password" placeholder="Your Password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-between align-items-top mb-4">
                                <div class="form-check"><input class="form-check-input" type="checkbox" name="remember"
                                        id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label mb-0" for="remember">Remember me</label></div>
                                <div><a href="{{ route('password.request') }}"
                                        class="small text-right">Lost password?</a></div>
                            </div>
                            <!-- End of Form -->
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Sign in</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
