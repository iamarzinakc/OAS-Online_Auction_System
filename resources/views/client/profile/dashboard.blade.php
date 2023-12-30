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
                <span>Profile Dashboard</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{asset('frontend/assets/images/banner/hero-bg.png')}}"></div>
</div>
<!--============= Hero Section Ends Here =============-->

<!--============= Dashboard Section Starts Here =============-->
<section class="dashboard-section padding-bottom mt--240 mt-lg--325 pos-rel">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-7 col-lg-4">
                <div class="dashboard-widget mb-30 mb-lg-0">
                    <div class="user">
                        <div class="thumb-area">
                            <div class="thumb">
                                <img src="{{asset('frontend/assets/images/dashboard/profile.png')}}" alt="user">
                            </div>
                            <label for="profile-pic" class="profile-pic-edit"><i class="flaticon-pencil"></i></label>
                            <input type="file" id="profile-pic" class="d-none">
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
                <div class="dashboard-widget mb-40">
                    <div class="dashboard-title mb-30">
                        <h5 class="title">My Activity</h5>
                    </div>
                    <div class="row justify-content-center mb-30-none">
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/dashboard/01.png')}}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">80</span></h2>
                                    <h6 class="info">Active Bids</h6>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="dashboard-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/dashboard/02.png')}}" alt="dashboard">
                                </div>
                                <div class="content">
                                    <h2 class="title"><span class="counter">15</span></h2>
                                    <h6 class="info">Items Won</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="dashboard-widget">
                    <h5 class="title mb-10">Purchasing</h5>
                    <div class="dashboard-purchasing-tabs">
                        <ul class="nav-tabs nav">
                            <li>
                                <a href="#current" class="active" data-toggle="tab">Current</a>
                            </li>
                            <li>
                                <a href="#pending" data-toggle="tab">Pending</a>
                            </li>
                            <li>
                                <a href="#history" data-toggle="tab">History</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane show active fade" id="current">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Item</th>
                                        <th>Bid Price</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Bid</th>
                                        <th>Expires</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane show fade" id="pending">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Item</th>
                                        <th>Bid Price</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Bid</th>
                                        <th>Expires</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane show fade" id="history">
                                <table class="purchasing-table">
                                    <thead>
                                        <th>Item</th>
                                        <th>Bid Price</th>
                                        <th>Highest Bid</th>
                                        <th>Lowest Bid</th>
                                        <th>Expires</th>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td data-purchase="item">2018 Hyundai Sonata</td>
                                            <td data-purchase="bid price">$1,775.00</td>
                                            <td data-purchase="highest bid">$1,775.00</td>
                                            <td data-purchase="lowest bid">$1,400.00</td>
                                            <td data-purchase="expires">7/2/2021</td>
                                        </tr>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->

@endsection