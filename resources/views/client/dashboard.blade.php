@extends('client.layout.master')
@section('content')
<!--============= Banner Section Starts Here =============-->
<section class="banner-section bg_img" data-background="{{asset('frontend/assets/images/banner/banner-bg-1.png')}}">
    <div class="container">
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-6 col-xl-6">
                <div class="banner-content cl-white">
                    <h5 class="cate">Next Generation Auction</h5>
                    <h1 class="title">
                        <span class="d-xl-block">Find Your</span> Next Deal!
                    </h1>
                    <p>
                        Online Auction is where everyone goes to shop, sell,and give,
                        while discovering variety and affordability.
                    </p>
                    <a href="#" class="custom-button yellow btn-large">Get Started</a>
                </div>
            </div>
            <div class="d-none d-lg-block col-lg-6">
                <div class="banner-thumb-2">
                    <img src="{{asset('frontend/assets/images/banner/banner-1.png')}}" alt="banner" />
                </div>
            </div>
        </div>
    </div>
    <div class="banner-shape d-none d-lg-block">
        <img src="{{asset('frontend/assets/css/img/banner-shape.png')}}" alt="css" />
    </div>
</section>
<!--============= Banner Section Ends Here =============-->

<div class="browse-section ash-bg">
    <!--============= Hightlight Slider Section Starts Here =============-->
    <div class="browse-slider-section mt--140">
        <div class="container">
            <div class="section-header-2 cl-white mb-4">
                <div class="left">
                    <h6 class="title pl-0 w-100">Browse the highlights</h6>
                </div>
                <div class="slider-nav">
                    <a href="#0" class="bro-prev"><i class="flaticon-left-arrow"></i></a>
                    <a href="#0" class="bro-next active"><i class="flaticon-right-arrow"></i></a>
                </div>
            </div>
            <div class="m--15">
                <div class="browse-slider owl-theme owl-carousel">
                    <a href="#0" class="browse-item">
                        <img src="{{asset('frontend/assets/images/auction/01.png')}}" alt="auction" />
                        <span class="info">Products</span>
                    </a>
                    <a href="#0" class="browse-item">
                        <img src="{{asset('frontend/assets/images/auction/02.png')}}" alt="auction" />
                        <span class="info">Jewelry</span>
                    </a>
                    <a href="#0" class="browse-item">
                        <img src="{{asset('frontend/assets/images/auction/03.png')}}" alt="auction" />
                        <span class="info">Watches</span>
                    </a>
                    <a href="#0" class="browse-item">
                        <img src="{{asset('frontend/assets/images/auction/04.png')}}" alt="auction" />
                        <span class="info">Electrical</span>
                    </a>

                </div>
            </div>
        </div>
    </div>
    <!--============= Hightlight Slider Section Ends Here =============-->

    <!--============= Car Auction Section Starts Here =============-->
    <section class="car-auction-section padding-bottom padding-top pos-rel oh">
        <div class="car-bg">
            <img src="{{asset('frontend/assets/images/auction/car/car-bg.png')}}" alt="car" />
        </div>
        <div class="container">
            <div class="section-header-3">
                <div class="left">
                    <div class="thumb">
                        <img src="{{asset('frontend/assets/images/header-icons/car-1.png')}}" alt="header-icons" />
                    </div>
                    <div class="title-area">
                        <h2 class="title">Products</h2>
                        <p>We offer affordable Products</p>
                    </div>
                </div>
                <a href="{{('product')}}" class="normal-button">View All</a>
            </div>
            <div class="row justify-content-center mb-30-none">
                
                @foreach ($product as $products)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="{{asset('product_detail')}}"><img src="{{asset('public/image/product/'.$products->front_image)}}" alt="car" /></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="{{route('product.detail',$products->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="{{route('product.detail',$products->id)}}">{{$products->name}}</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">RS:{{$products->bid}}</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Starting Price</div>
                                        <div class="amount">RS:{{$products->price}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="countdown-area">
                                
                            </div>
                            <div class="text-center">
                                <a href="{{route('product.detail',$products->id)}}" class="custom-button">View Details &nbsp; <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!--============= Car Auction Section Ends Here =============-->
</div>

<!--============= How Section Starts Here =============-->
<section class="how-section padding-top">
    <div class="container">
        <div class="how-wrapper section-bg">
            <div class="section-header text-lg-left">
                <h2 class="title">How it works</h2>
                <p>Easy 3 steps to win</p>
            </div>
            <div class="row justify-content-center mb--40">
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{asset('frontend/assets/images/how/how1.png')}}" alt="how" />
                        </div>
                        <div class="how-content">
                            <h4 class="title">Sign Up</h4>
                            <p>No Credit Card Required</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{asset('frontend/assets/images/how/how2.png')}}" alt="how" />
                        </div>
                        <div class="how-content">
                            <h4 class="title">Bid</h4>
                            <p>Bidding is free Only pay if you win</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="how-item">
                        <div class="how-thumb">
                            <img src="{{asset('frontend/assets/images/how/how3.png')}}" alt="how" />
                        </div>
                        <div class="how-content">
                            <h4 class="title">Win</h4>
                            <p>Fun - Excitement - Great deals</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= How Section Ends Here =============-->

<!--============= Client Section Starts Here =============-->
<section class="client-section padding-top padding-bottom">
    <div class="container">
        <div class="section-header">
            <h2 class="title">Don’t just take our word for it!</h2>
            <p>
                Our hard work is paying off. Great reviews from amazing customers.
            </p>
        </div>
        <div class="m--15">
            <div class="client-slider owl-theme owl-carousel">
                <div class="client-item">
                    <div class="client-content">
                        <p>
                            I can't stop bidding! It's a great way to spend some time and
                            I want everything on Online Auction Nepal.
                        </p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="{{asset('frontend/assets/images/client/user1.png')}}" alt="client" />
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Alexis Moore</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-content">
                        <p>
                            I came I saw I won. Love what I have won, and will try to win
                            something else.
                        </p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="{{asset('frontend/assets/images/client/user2.png')}}" alt="client" />
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Darin Griffin</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="client-item">
                    <div class="client-content">
                        <p>
                            This was my first time, but it was exciting. I will try it
                            again. Thank you so much.
                        </p>
                    </div>
                    <div class="client-author">
                        <div class="thumb">
                            <a href="#0">
                                <img src="{{asset('frontend/assets/images/client/user3.png')}}" alt="client" />
                            </a>
                        </div>
                        <div class="content">
                            <h6 class="title"><a href="#0">Tom Powell</a></h6>
                            <div class="ratings">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--============= Client Section Ends Here =============-->
@endsection