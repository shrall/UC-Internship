@extends('layouts.app')

@section('content')
<section class="bg-soft d-flex align-items-center my-5 mt-lg-6 mb-lg-5">
    <div class="container">
        <div class="row justify-content-center form-bg-image">
            <p class="text-center">
                <a href="{{ route('login') }}" class="text-gray-700">
                    <i class="fas fa-angle-left mr-2"></i>
                    Back to log in</a>
            </p>
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div class="bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <h1 class="h3 mb-4">Reset password</h1>
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <div class="mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ $email ?? old('email') }}" required
                                    autocomplete="email" autofocus>
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password">Your Password</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon4">
                                    <span class="fas fa-unlock-alt"></span>
                                </span>
                                <input id="password" type="password" class="form-control" name="password" required
                                    autocomplete="new-password">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="confirm_password">Confirm Password</label>
                            <div class="input-group">
                                <span class="input-group-text" id="basic-addon5">
                                    <span class="fas fa-unlock-alt"></span>
                                </span>
                                <input id="password-confirm" type="password" class="form-control"
                                    name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">
                            {{ __('Reset Password') }}
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
