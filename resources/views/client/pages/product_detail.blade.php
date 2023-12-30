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
                <span>Product Details</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{asset('frontend/assets/images/banner/hero-bg.png')}}"></div>
</div>
<!--============= Hero Section Ends Here =============-->

<!--============= Product Details Section Starts Here =============-->
<section class="product-details padding-bottom mt--240 mt-lg--440">
    <div class="container">
        <div class="product-details-slider-top-wrapper">
            <div class="product-details-slider owl-theme owl-carousel" id="sync1">
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->front_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->back_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->left_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->right_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->back_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-top-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->front_image)}}" alt="product">
                    </div>
                </div>
            </div>
        </div>
        <div class="product-details-slider-wrapper">
            <div class="product-bottom-slider owl-theme owl-carousel" id="sync2">
                <div class="slide-bottom-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->front_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-bottom-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->back_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-bottom-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->left_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-bottom-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->right_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-bottom-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->back_image)}}" alt="product">
                    </div>
                </div>
                <div class="slide-bottom-item">
                    <div class="slide-inner">
                        <img src="{{asset('public/image/product/'.$product->front_image)}}" alt="product">
                    </div>
                </div>
            </div>
            <span class="det-prev det-nav">
                <i class="fas fa-angle-left"></i>
            </span>
            <span class="det-next det-nav active">
                <i class="fas fa-angle-right"></i>
            </span>
        </div>
        <div class="row mt-40-60-80">
            <div class="col-lg-8">
                <div class="product-details-content">
                    <div class="product-details-header">
                        <h2 class="title"></h2>
                        <ul>
                            <li>Listing ID: 14076242</li>
                            <li>Item #: 7300-3356862</li>
                        </ul>
                    </div>
                    <ul class="price-table mb-30">
                        <li class="header">
                            <h5 class="current">Current Price</h5>
                            @if($product->bids->first())
                            <h3 class="price">RS.{{$product->bids->last()->price}} </h3>
                            @else
                            <h3 class="price">RS.{{$product->price}} </h3>
                            @endif
                        </li>

                    </ul>
                    <div class="product-bid-area">

                        <button class="btn btn-info custom-button" data-toggle="modal" data-target="#PlaceABid">Place a bid</button>
                    </div>


                    <div class="buy-now-area">
                        <!-- <a href="#0" class="custom-button">Buy Now: $4,200</a>
                        <a href="#0" class="rating custom-button active border"><i class="fas fa-star"></i> Add to Wishlist</a> -->
                        <div class="share-area">
                            <span>Share to:</span>
                            <ul>
                                <li>
                                    <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li>
                                    <a href="#0"><i class="fab fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div style="display:none;" id="counter_najaneko">2023/03/02 </div> -->
            <div class="col-lg-4">
                <div class="product-sidebar-area">
                    <div class="product-single-sidebar mb-3">
                        <h6 class="title">This Auction Ends in:</h6>
                        <span style="display: none;" class="counter_najaneko">{{$product->time}}</span>
                        <div class="countdown">
                            <div id="bid_counter1"></div>
                        </div>
                        <div class="side-counter-area">
                            <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/product/icon1.png')}}" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">61</span></h3>
                                    <p>Active Bidders</p>
                                </div>
                            </div>
                            <!-- <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/product/icon2.png')}}" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">203</span></h3>
                                    <p>Watching</p>
                                </div>
                            </div> -->
                            <div class="side-counter-item">
                                <div class="thumb">
                                    <img src="{{asset('frontend/assets/images/product/icon3.png')}}" alt="product">
                                </div>
                                <div class="content">
                                    <h3 class="count-title"><span class="counter">82</span></h3>
                                    <p>Total Bids</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="#0" class="cart-link">View Shipping, Payment & Auction Policies</a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="product-tab-menu-area mb-40-60 mt-70-100">
        <div class="container">
            <ul class="product-tab-menu nav nav-tabs">
                <li>
                    <a href="#details" class="active" data-toggle="tab">
                        <div class="thumb">
                            <img src="{{asset('frontend/assets/images/product/tab1.png')}}" alt="product">
                        </div>
                        <div class="content">Description</div>
                    </a>
                </li>
                <li>
                    <a href="#delevery" data-toggle="tab">
                        <div class="thumb">
                            <img src="{{asset('frontend/assets/images/product/tab2.png')}}" alt="product">
                        </div>
                        <div class="content">Delivery Options</div>
                    </a>
                </li>
                <li>
                    <a href="#history" data-toggle="tab">
                        <div class="thumb">
                            <img src="{{asset('frontend/assets/images/product/tab3.png')}}" alt="product">
                        </div>
                        <div class="content">Bid History (36)</div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="container">
        <div class="tab-content">
            <div class="tab-pane fade show active" id="details">
                <div class="tab-details-content">
                    <div class="header-area">
                        <h3 class="title">{{$product->name}}</h3>
                        <div class="item">
                            <table class="product-info-table">
                                <tbody>
                                    <tr>
                                        <th>Condition</th>
                                        <td>{{$product->condition}}</td>
                                    </tr>
                                    <tr>
                                        <th>Model Number</th>
                                        <td>{{$product->model_no}}</td>
                                    </tr>
                                    <tr>
                                        <th>Buy Year</th>
                                        <td>{{$product->buy_year}}</td>
                                    </tr>
                                    <tr>
                                        <th>Feature</th>
                                        <td>{{$product->feature->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Fuel</th>
                                        <td>Regular</td>
                                    </tr>
                                    <tr>
                                        <th>Transmission</th>
                                        <td>Automatic</td>
                                    </tr>
                                    <tr>
                                        <th>Color</th>
                                        <td>{{$product->color}}</td>
                                    </tr>
                                    <tr>
                                        <th>Doors</th>
                                        <td>5</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="delevery">
                <div class="shipping-wrapper">
                    <div class="item">
                        <h5 class="title">shipping</h5>
                        <div class="table-wrapper">
                            <table class="shipping-table">
                                <thead>
                                    <tr>
                                        <th>Available delivery methods </th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Customer Pick-up (within 10 days)</td>
                                        <td>$10.00</td>
                                    </tr>
                                    <tr>
                                        <td>Standard Shipping (5-7 business days)</td>
                                        <td>Not Applicable</td>
                                    </tr>
                                    <tr>
                                        <td>Expedited Shipping (2-4 business days)</td>
                                        <td>Not Applicable</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="item">
                        <h5 class="title">Notes</h5>
                        <p>Please carefully review our shipping and returns policy before committing to a bid.
                            From time to time, and at its sole discretion, We may change the prevailing fee structure for shipping and handling.</p>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade show" id="history">
                <div class="history-wrapper">
                    <div class="item">
                        <h5 class="title">Bid History</h5>
                        <div class="history-table-area">
                            <table class="history-table">
                                <thead>
                                    <tr>
                                        <th>Bidder</th>
                                        <th>date</th>
                                        <th>time</th>
                                        <th>unit price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td data-history="bidder">
                                            <div class="user-info">
                                                <div class="thumb">
                                                    <img src="{{asset('frontend/assets/images/history/01.png')}}" alt="history">
                                                </div>
                                                <div class="content">
                                                    Moses Watts
                                                </div>
                                            </div>
                                        </td>
                                        <td data-history="date">06/16/2021</td>
                                        <td data-history="time">02:45:25 PM</td>
                                        <td data-history="unit price">$900.00</td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="text-center mb-3 mt-4">
                                <a href="#0" class="button-3">Load More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

</section>
<!--============= Product Details Section Ends Here =============-->
<!-- --------------------------------------- Bid Place Form Model ---------------------------------------  -->
<div class="modal fade" id="PlaceABid" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="false">
    <div class="modal-dialog" role="document" style="display: flex; justify-content: center; align-items: center; min-height: 90vh;">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Submit Your Bid:</h5>
                <button type="button" class="close" style="width: 30px; margin-right: 0.5rem; outline: none;" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <form role="form" action="{{url('bid/store',$product->id)}}" method="POST">
                @csrf
                @method('GET')
                <div class="modal-body">

                    <!-- .form-group -->
                    <div class="form-group">
                        <input type="number" placeholder="Enter your bid amount" name="price">
                    </div><!-- /.form-group -->

                </div>
                <div class="modal-footer" style="display: grid; grid-template-columns: 1fr 1fr; column-gap: 10px;">
                    <div>
                        <button type="reset" class="btn btn-danger" data-dismiss="modal">Reset</button>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- ----------------------------- Ending of Model form --------------------------------------------------  -->


@endsection