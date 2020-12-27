@extends('layouts.app')

@section('content')
<section class="vh-lg-100 mt-lg-0 bg-soft d-flex align-items-center">
    <div class="container">
        <div class="row justify-content-center form-bg-image">
            <p class="text-center">
                <a href="{{ route('login') }}" class="text-gray-700">
                    <i class="fas fa-angle-left mr-2"></i>Back to log in</a></p>
            <div class="col-12 d-flex align-items-center justify-content-center">
                <div
                    class="signin-inner my-3 my-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                    <h1 class="h3">Forgot your password?</h1>
                    <p class="mb-4">Don't fret! Just type in your email and we will send you a code to reset your
                        password!</p>
                    @if(session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($errors->any())
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{ $error }}
                            </div>
                        @endforeach
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="mb-4">
                            <label for="email">Your Email</label>
                            <div class="input-group">
                                <input id="email" type="email" class="form-control" name="email"
                                    value="{{ old('email') }}" required autocomplete="email"
                                    autofocus>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Recover password</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
