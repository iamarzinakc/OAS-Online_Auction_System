@extends('layouts.app')

@section('content')
<!--============= Hero Section Starts Here =============-->
<div class="hero-section">

    <div class="bg_img hero-bg bottom_center" data-background="{{asset('frontend/assets/images/banner/hero-bg.png')}}"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Account Section Starts Here =============-->
<section class="account-section padding-bottom">
    <div class="container">
        <div class="account-wrapper mt--100 mt-lg--440">
            <div class="left-side">
                <div class="section-header">
                    <h2 class="title">Welcome</h2>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group mb-30">
                        <label for="fullname"><i class="far fa-user"></i></label>
                        <input type="text" id="fullname" placeholder="Full Name" name="name" class="form-control @error('name') is-invalid @enderror">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-30">
                        <label for="contact-number"><i class="fas fa-phone"></i></label>
                        <input type="number" id="contact-number" placeholder="Contact Number" name="phone" class="form-control @error('phone') is-invalid @enderror">
                        @error('phone')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-30">
                        <label for="login-email"><i class="far fa-envelope"></i></label>
                        <input type="text" id="login-email" placeholder="Email Address" name="email" class="form-control @error('email') is-invalid @enderror">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group mb-30">
                        <label for="login-pass"><i class="fas fa-lock"></i></label>
                        <input type="password" id="login-pass" placeholder="Password" name="password" class="form-control @error('password') is-invalid @enderror">
                        <span class="pass-type"><i class="fas fa-eye"></i></span>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group mb-0">
                        <button type="submit" class="custom-button">Sign Up</button>
                    </div>
                </form>
            </div>
            <div class="right-side cl-blue">
                <div class="section-header mb-0">
                    <h3 class="title mt-0">ALREADY HAVE AN ACCOUNT?</h3>
                    <p>Please Log In your Account</p>
                    <a href="{{route('login')}}" class="custom-button transparent">Log In</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Account Section Ends Here =============-->
@endsection