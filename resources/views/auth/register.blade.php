@extends('layouts.user')

@section('content')

<div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow p-4" style="width: 400px;">
            <h3 class="text-center mb-3">Register</h3>
            <form method="POST" action="{{ route('register') }}">
            @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <!-- <input type="text" class="form-control" id="name" name="name" placeholder="Enter your full name" required> -->
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Enter your full name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email Address</label>
                    <!-- <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" required> -->.
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" placeholder="Enter your email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <!-- <input type="password" class="form-control" id="password" name="password" placeholder="Create a password" required> -->.
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Create a password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                <div class="mb-3">
                    <label for="confirm_password" class="form-label">Confirm Password</label>
                    <!-- <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Re-enter password" required> -->
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required   placeholder="Re-enter password" autocomplete="new-password">
                </div>
                <button type="submit" class="btn btn-success w-100">Register</button>
                <p class="text-center mt-3">
                    Already have an account? <a href="{{route('login')}}">Login here</a>
                </p>
            </form>
        </div>
    </div>
@endsection
