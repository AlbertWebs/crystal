@extends('front.master')
@section('content')
<main class="main">
    <section class="home-slider owl-carousel owl-theme text-uppercase nav-big bg-gray" data-owl-options="{
        'loop': false
    }">


    <div class="home-slide home-slide2 banner">
        <img class="slide-bg" src="{{asset('theme/assets/images/demoes/demo14/slider/slide-2.jpg')}}" alt="slider image" width="1120" height="500" style="background-color: #eee;">

        <div class="container">
            <div class="banner-layer banner-layer-middle banner-layer-left">
                <h4 class="mb-0">Extra</h4>
                <h3 class="m-b-2">20% off</h3>
                <h3 class="m-b-3 heading-border" style="color:#1DA098">Accessories</h3>
                <h2 class="m-b-4">Drones on sale</h2>
                <a href="#" class="btn btn-block btn-dark" style="background-color: #1DA098">Shop All Sale</a>
            </div>
        </div>
        <!-- End .container -->
    </div>
    <!-- End .home-slide -->
    <hr>
</section>
<!-- End .home-slider -->
    {{-- @include('front.home-slider') --}}

    @include('front.home-filter')

    @include('front.home-combo')

    @include('front.home-trending')

    <section class="product-section2 container">
        <div class="row">
            <div class="col-md-4 appear-animate" data-animation-name="fadeInLeftShorter">
                <h3 class="custom-title">Special Offers</h3>
                <div class="owl-carousel owl-theme dots-simple">
                    <?php $SpecialOffers = DB::table('product')->where('offer','1')->get(); ?>
                    @foreach ($SpecialOffers as $special)
                    <div class="banner banner1"
                        style="background: url('{{url('/')}}/uploads/product/{{$special->offer_banner}}') rgb(29,160,152); background-position: center; background-size: cover; background-repeat: no-repeat; min-height: 40.2rem;">
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
            @include('front.home-suggest')
            @include('front.home-favorite')
        </div>
    </section>

    @include('front.home-brand')

    @include('front.home-call-to-action')

    @include('front.newly-arrived')

    @include('front.home-tags')
</main>
<!-- End .main -->
@endsection
