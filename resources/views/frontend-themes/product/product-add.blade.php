@extends('layouts.forntend')


@section('content')

<div id="registration" class="registration section">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">
        <div class="section-heading  wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.5s">
          <h4>Create a New <em>Account</em></h4>
          <img src="{{ asset('assets-fornt/images/heading-line-dec.png') }}" alt="">
          <p>Fill in the form below to register for an account.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-6 offset-lg-3">
        <form action="/submit-registration" method="POST">
          @csrf <!-- If you're using Laravel, add CSRF token for security -->
          <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your full name">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" required placeholder="Enter your email">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" required placeholder="Enter your password">
          </div>
          <div class="form-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required placeholder="Confirm your password">
          </div>
          <button type="submit" class="btn btn-primary">Register</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection
