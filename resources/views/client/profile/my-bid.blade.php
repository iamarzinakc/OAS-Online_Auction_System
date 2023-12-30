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
                <span>My Bid</span>
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
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="upcoming">
                        <div class="row mb-30-none justify-content-center">
                            @foreach($bids as $bid)
                            <div class="col-sm-10 col-md-6">
                                <div class="auction-item-2">
                                    <div class="auction-thumb">
                                        <a href="{{route('product.detail',$bid->product_id)}}"><img src="{{asset('public/image/product/'.$bid->product->front_image)}}" alt="car"></a>
                                        <a href="#0" class="rating"><i class="far fa-star"></i></a>
                                        <a href="#0" class="bid"><i class="flaticon-auction"></i></a>
                                    </div>
                                    <div class="auction-content">
                                        <h6 class="title">
                                            <a href="{{route('product.detail',$bid->product_id)}}">{{$bid->product->name}}</a>
                                        </h6>
                                        <div class="bid-area">
                                            <div class="bid-amount">
                                                <div class="icon">
                                                    <i class="flaticon-auction"></i>
                                                </div>
                                                <div class="amount-content">
                                                    <div class="current">Current Bid</div>
                                                    <div class="amount">RS:{{$bid->price}}</div>
                                                </div>
                                            </div>
                                            <div class="bid-amount">
                                                <div class="icon">
                                                    <i class="flaticon-money"></i>
                                                </div>
                                                <div class="amount-content">
                                                    <div class="current">Starting Price </div>
                                                    <div class="amount">RS:{{$bid->product->price}}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="countdown-area">
                                           
                                        </div>
                                        <div class="text-center">
                                            <a href="{{route('product.detail',$bid->product_id)}}" class="custom-button">View Details</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Dashboard Section Ends Here =============-->


@endsection