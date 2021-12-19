@extends('front.master')
@section('content')
<main class="main">
    
    @include('front.home-slider')

    @include('front.home-filter')

    @include('front.home-combo')
  
    @include('front.home-trending')
    
    <section class="product-section2 container">
        <div class="row">
            <div class="col-md-4 appear-animate" data-animation-name="fadeInLeftShorter">
                <h3 class="custom-title">Special Offers</h3>
                <div class="owl-carousel owl-theme dots-simple">
                    <?php $SpecialOffers = DB::table('product')->where('offer','1')->where('special','1')->get(); ?>
                    @foreach ($SpecialOffers as $special)
                    <div class="banner banner1"
                        style="background: url('{{url('/')}}/uploads/product/{{$special->thumbnail}}') rgb(232, 127, 59); background-position: center; background-size: cover; background-repeat: no-repeat; min-height: 40.2rem;">
                        <div class="banner-content banner-layer-middle position-absolute">

                            {{-- <img src="{{asset('theme/assets/images/demoes/demo42/shop_brand1.png')}}" width="232" height="28"
                                alt="brand" /> --}}
                            <h1 class="text-uppercase text-white" style="font-size:3.5rem">{{$special->name}}</h1>
                            <?php $Category = DB::table('category')->where('id',$special->cat)->get(); ?>
                            @foreach($Category as $cat)
                            {{-- <a target="new" href="{{url('/')}}/products/{{$cat->slung}}" class="product-category">{{$cat->cat}}</a> --}}
                            <h3 class="banner-subtitle text-uppercase text-white">{{$cat->cat}}</h3>
                            @endforeach

                            @if (session()->has('rates'))
                    
                                <?php
                                    $rates = Session::get('rates');
                                    $Rates = DB::table('rates')->where('rates',$rates)->get();    
                                ?>
                                
                                @foreach ($Rates as $rt)
                                <h2 class="banner-title text-uppercase text-white font-weight-bold">
                                    Starting<br>At <sup>{{$rt->symbol}}</sup><?php $total = $special->price*$rt->rates; echo ceil($total) ?><sup>00</sup>
                                </h2>
                                @endforeach
                            @else 
                            <h2 class="banner-title text-uppercase text-white font-weight-bold">
                                Starting<br>At <sup>ksh</sup>{{$special->price}}<sup>00</sup>
                            </h2>
                            @endif
                            <p class="banner-desc text-white">Start Shopping Right Now</p>
                            <a href="{{url('/')}}/product/{{$special->slung}}" class="btn btn-dark btn-rounded btn-icon-right ls-25" role="button">Shop
                                Now
                                <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                    @endforeach
                   
                    
                </div>
            </div>
            <div class="col-md-4 appear-animate" data-animation-name="fadeInLeftShorter"
                data-animation-delay="200">
                <div class="d-lg-flex align-items-center">
                    <h3 class="custom-title divider">We Suggest</h3>
                    <a href="demo42-shop.html" class="sicon-title">VIEW ALL<i
                            class="fas fa-arrow-right"></i></a>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="demo42-product.html">
                            <img src="{{asset('theme/assets/images/demoes/demo42/product/product7-300x300.jpg')}}" width="95"
                                height="95" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html">Interior Accessories</a>
                        </div>
                        <h3 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$199.00</del>
                            <span class="product-price">$129.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="demo42-product.html">
                            <img src="{{asset('theme/assets/images/demoes/demo42/product/product8-300x300.jpg')}}" width="95"
                                height="95" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html">Auto Parts</a>
                        </div>
                        <h3 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$288.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="demo42-product.html">
                            <img src="{{asset('theme/assets/images/demoes/demo42/product/product9-300x300.jpg')}}" width="95"
                                height="95" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html">Interior Accessories</a>
                        </div>
                        <h3 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:0%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <del class="old-price">$299.00</del>
                            <span class="product-price">$259.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
            <div class="col-md-4 appear-animate" data-animation-name="fadeInLeftShorter"
                data-animation-delay="400">
                <div class="d-lg-flex align-items-center">
                    <h3 class="custom-title divider">Customer Favorites</h3>
                    <a href="demo42-shop.html" class="sicon-title">VIEW ALL<i
                            class="fas fa-arrow-right"></i></a>
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="demo42-product.html">
                            <img src="{{asset('theme/assets/images/demoes/demo42/product/product10-300x300.jpg')}}" width="95"
                                height="95" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html">Performance</a>
                        </div>
                        <h3 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:100%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$488.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="demo42-product.html">
                            <img src="{{asset('theme/assets/images/demoes/demo42/product/product11-300x300.jpg')}}" width="95"
                                height="95" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html">Sound & Video</a>
                        </div>
                        <h3 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$299.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
                <div class="product-default left-details product-widget">
                    <figure>
                        <a href="demo42-product.html">
                            <img src="{{asset('theme/assets/images/demoes/demo42/product/product12-300x300.jpg')}}" width="95"
                                height="95" alt="product">
                        </a>
                    </figure>
                    <div class="product-details">
                        <div class="category-list">
                            <a href="category.html">Hot Deals</a>,
                            <a href="category.html">Steering Wheels</a>
                        </div>
                        <h3 class="product-title">
                            <a href="#">Product Short Name</a>
                        </h3>
                        <div class="ratings-container">
                            <div class="product-ratings">
                                <span class="ratings" style="width:80%"></span>
                                <!-- End .ratings -->
                                <span class="tooltiptext tooltip-top"></span>
                            </div>
                            <!-- End .product-ratings -->
                        </div>
                        <!-- End .product-container -->
                        <div class="price-box">
                            <span class="product-price">$55.00</span>
                        </div>
                        <!-- End .price-box -->
                    </div>
                    <!-- End .product-details -->
                </div>
            </div>
        </div>
    </section>

    @include('front.home-brand')
   
    @include('front.home-call-to-action')
   
    @include('front.newly-arrived')

    @include('front.home-tags')
</main>
<!-- End .main -->
@endsection