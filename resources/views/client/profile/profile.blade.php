@extends('client.layout.master')
@section('content')

<!--============= Hero Section Starts Here =============-->
<div class="hero-section">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="{{url('/')}}">Home</a>
            </li>
            <li>
                <span>Profile</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{asset('frontend/assets/images/banner/hero-bg.png')}}"></div>
</div>
<!--============= Hero Section Ends Here =============-->

<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--440 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-4">
                <div class="dashboard-widget mb-30 mb-lg-0 sticky-menu">
                    <div class="user">
                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="{{asset('frontend/assets/images/dashboard/profile.png')}}" alt="user">
                            </div>
                            <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                            <input type="file" id="profile-pic" class="d-none" name="">
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="{{asset('profile')}}">{{auth()->user()->name}}</a></h5>
                            <span class="username">{{auth()->user()->email}}</span>
                        </div>
                    </div>
                    <ul class="dashboard-menu">
                        <li>
                            <a href="{{asset('dashboard')}}"><i class="flaticon-dashboard"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="{{asset('profile')}}"><i class="flaticon-settings"></i>Personal Profile </a>
                        </li>
                        <li>
                            <a href="{{asset('my-bid')}}"><i class="flaticon-auction"></i>My Bids</a>
                        </li>
                        <li>
                            <a href="{{asset('win-bid')}}"><i class="flaticon-best-seller"></i>Winning Bids</a>
                        </li>

                        <li>
                            <a href="{{asset('referral')}}"><i class="flaticon-shake-hand"></i>Referrals</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <span class="dropdown-icon oi oi-account-logout"></span> Log Out
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-12">
                        <div class="dash-pro-item mb-30 dashboard-widget">
                            <div class="header">
                                <h4 class="title">Personal Details</h4>
                                <span class="edit"><i class="flaticon-edit"></i> Edit</span>
                            </div>
                            <ul class="dash-pro-body">
                                <li>
                                    <div class="info-name">Name</div>
                                    <div class="info-value">{{auth()->user()->name}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Date of Birth</div>
                                    <div class="info-value">{{auth()->user()->dob}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Gender</div>
                                    <div class="info-value">{{auth()->user()->gender}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Address</div>
                                    <div class="info-value">{{auth()->user()->per_address}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Email</div>
                                    <div class="info-value">{{auth()->user()->email}}</div>
                                </li>
                                <li>
                                    <div class="info-name">Mobile</div>
                                    <div class="info-value">{{auth()->user()->phone}}</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection