@extends('client.layout.master')
@section('content')


<!--============= Hero Section Starts Here =============-->
<div class="hero-section style-2">
    <div class="container">
        <ul class="breadcrumb">
            <li>
                <a href="/">Home</a>
            </li>

            <li>
                <span>Products</span>
            </li>
        </ul>
    </div>
    <div class="bg_img hero-bg bottom_center" data-background="{{asset('frontend/assets/images/banner/hero-bg.png')}}"></div>
</div>
<!--============= Hero Section Ends Here =============-->


<!--============= Featured Auction Section Starts Here =============-->

<!--============= Featured Auction Section Ends Here =============-->


<!--============= Product Auction Section Starts Here =============-->

<div class="product-auction padding-bottom">
    <div class="container">
        <section class="featured-auction-section padding-bottom mt--240 mt-lg--440 pos-rel">
            <div class="container">
                <div class="section-header cl-white mw-100 left-style">
                    <h3 class="title">Bid on These Featured Auctions!</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur similique atque praesentium.
                         Officiis minus repellendus quidem molestias! Magni velit delectus quia, sint veniam consectetur
                          incidunt vero dicta quos voluptate est?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores tenetur voluptatum beatae asperiores
                         animi suscipit culpa, quae quis, voluptates fugiat voluptate dolorem dolor! Quasi sint tempore aliquid debitis
                          qui in!
                        </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur similique atque praesentium.
                         Officiis minus repellendus quidem molestias! Magni velit delectus quia, sint veniam consectetur
                          incidunt vero dicta quos voluptate est?
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores tenetur voluptatum beatae asperiores
                         animi suscipit culpa, quae quis, voluptates fugiat voluptate dolorem dolor! Quasi sint tempore aliquid debitis
                          qui in!
                        </p>
                </div>
            </div>
        </section>
        <div class="product-header mb-40">
            <div class="product-header-item">
                <div class="item">Sort By : </div>
                <select name="sort-by" class="select-bar">
                    <option value="all">All</option>
                    <option value="name">Name</option>
                    <option value="date">Date</option>
                    <option value="type">Type</option>
                    <option value="car">Car</option>
                </select>
            </div>
            <div class="product-header-item">
                <div class="item">Show : </div>
                <select name="sort-by" class="select-bar">
                    <option value="10">10</option>
                    <option value="20">20</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="500">500</option>
                </select>
            </div>
            <form class="product-search ml-auto">
                <input type="text" placeholder="Item Name">
                <button type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
        <div class="row mb-30-none justify-content-center">
        @foreach ($products as $product)
                <div class="col-sm-10 col-md-6 col-lg-4">
                    <div class="auction-item-2">
                        <div class="auction-thumb">
                            <a href="{{asset('product_detail')}}"><img src="{{asset('public/image/product/'.$product->front_image)}}" alt="car" /></a>
                            <a href="#0" class="rating"><i class="far fa-star"></i></a>
                            <a href="{{route('product.detail',$product->id)}}" class="bid"><i class="flaticon-auction"></i></a>
                        </div>
                        <div class="auction-content">
                            <h6 class="title">
                                <a href="{{route('product.detail',$product->id)}}">{{$product->name}}</a>
                            </h6>
                            <div class="bid-area">
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-auction"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Current Bid</div>
                                        <div class="amount">RS:{{$product->bid}}</div>
                                    </div>
                                </div>
                                <div class="bid-amount">
                                    <div class="icon">
                                        <i class="flaticon-money"></i>
                                    </div>
                                    <div class="amount-content">
                                        <div class="current">Starting Price</div>
                                        <div class="amount">RS:{{$product->price}}</div>
                                    </div>
                                </div>
                            </div>

                            <div class="countdown-area">
                                
                            </div>
                            <div class="text-center">
                                <a href="{{route('product.detail',$product->id)}}" class="custom-button">View Details &nbsp; <i class="fa fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
        <ul class="pagination">
            <li>
                <a href="#0"><i class="flaticon-left-arrow"></i></a>
            </li>
            <li>
                <a href="#0">1</a>
            </li>
            <li>
                <a href="#0" class="active">2</a>
            </li>
            <li>
                <a href="#0">3</a>
            </li>
            <li>
                <a href="#0"><i class="flaticon-right-arrow"></i></a>
            </li>
        </ul>
    </div>
</div>
<!--============= Product Auction Section Ends Here =============-->



@endsection