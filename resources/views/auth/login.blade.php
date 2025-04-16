@extends('layouts.user')

@section('content')
<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 400px;">
            <h3 class="text-center mb-3">Login</h3>
            <form method="POST" action="{{ route('login') }}">
            @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <!-- <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required> -->
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <!-- <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required> -->
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="mb-3 form-check">
                    <label class="form-check-label" for="remember">Remember me</label>
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                </div>
                <button type="submit" class="btn btn-primary w-100">Login</button>
                <p class="text-center mt-3">
                    Don't have an account? <a href="{{ route('register') }}">Register here</a>
                </p>
                <p class="text-center mt-3">
                    @if (Route::has('password.request'))
                    Forget account password. ? <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    @endif
                </p>
            </form>
        </div>
    </div>
@endsection
