<section class="brand-section appear-animate" style="background-color: #f4f4f4;">
    <div class="container">
        <h2 class="title title-underline pb-1 appear-animate" data-animation-name="fadeInLeftShorter">Shop
            By
            Brand</h2>
        <div class="owl-carousel owl-theme nav-big nav-outer appear-animate" data-owl-options="{
                'autoplay': true,
                'autoPlaySpeed': 1000,
                'autoPlayTimeout': 1000,
                'loop': false,
                'dots': true,
                'nav': false,
                'margin': 20,
                'responsive': {
                    '0': {
                        'items': 1
                    },
                    '750': {
                        'items': 2
                    }
                }
            }">
            <?php $Brands = DB::table('brands')->limit('4')->get(); ?>
            @foreach ($Brands as $brands)
            <div class="brand-box">
                <div class="brand-name">
                    <h3>Shop {{$brands->name}}:</h3>
                    <img src="{{url('/')}}/uploads/brands/{{$brands->image}}" width="140" height="60"
                        alt="brand" />
                </div>
                <div class="shop-products owl-carousel owl-theme dots-simple" data-owl-options="{
                        'autoplay': true,
                        'autoPlaySpeed': 1000,
                        'autoPlayTimeout': 1000,
                        'autoplayHoverPause': true,
                        'loop': true,
                        'dots': false,
                        'nav': true,
                        'items': 2,
                        'margin': 30
                    }">
                    <?php $BrandProducts = DB::table('product')->where('brand',$brands->name)->limit(4)->inRandomOrder()->get(); ?>
                    @foreach($BrandProducts as $BrandsProducts)
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="{{url('/')}}/product/{{$BrandsProducts->slung}}">
                                <img src="{{url('/')}}/uploads/product/{{$BrandsProducts->thumbnail}}" width="300"
                                    height="300" alt="{{$BrandsProducts->name}}">
                            </a>
                            <div class="label-group">
                                <?php $HotProduct = DB::table('orders_products')->where('products_id',$BrandsProducts->id)->get() ?>
                                @if($HotProduct->isEmpty())
        
                                @else
                                <div class="product-label label-hot">HOT</div>
                                @endif
                                @if($BrandsProducts->offer == 1)
                                <span class="product-label label-sale">
                                -<?php 
                                    $Original = $BrandsProducts->price_raw;
                                    $OfferPrice = $BrandsProducts->price;
                                    $percentage = ($OfferPrice*100)/$Original;
                                    $less = 100-ceil($percentage);
                                    echo $less
                                ?>%
                                </span>
                                @else 
                                
                                @endif
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view/{{$BrandsProducts->slung}}" class="btn-quickview" title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <?php $Category = DB::table('category')->where('id',$BrandsProducts->cat)->get(); ?>
                                    @foreach($Category as $cat)
                                    <a  href="{{url('/')}}/products/{{$cat->slung}}">{{$cat->cat}}</a>
                                    @endforeach
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a target="new" href="{{url('/')}}/product/{{$BrandsProducts->slung}}">{{$BrandsProducts->name}}</a>
                            </h3>
                            <div class="ratings-container">
                                <?php $Reviews = DB::table('reviews')->where('product_id',$BrandsProducts->id)->get(); ?>
                                @if($Reviews->isEmpty())
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                                @else 
                                <?php $ReviewsAvg = DB::table('reviews')->where('product_id',$BrandsProducts->id)->avg('rating'); ?>
                                <div class="product-ratings">
                                    <span class="ratings" style="width:{{$ReviewsAvg}}%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                                @endif
                            </div><!-- End .product-container -->
                            @if($BrandsProducts->offer == 1)
                                @if (session()->has('rates'))
                                
                                    <?php
                                        $rates = Session::get('rates');
                                        $Rates = DB::table('rates')->where('rates',$rates)->get();    
                                    ?>
                                    
                                    @foreach ($Rates as $rt)
                                    <div class="price-box">
                                        <del class="old-price">{{$rt->symbol}}<?php $total = $BrandsProducts->price_raw*$rt->rates; echo ceil($total) ?></del>
                                        <span class="product-price">{{$rt->symbol}}<?php $total = $BrandsProducts->price*$rt->rates; echo ceil($total) ?></span>
                                    </div><!-- End .price-box -->
                                    @endforeach
                                
                                @else
                                <div class="price-box">
                                    <del class="old-price">Ksh {{$BrandsProducts->price_raw}}</del>
                                    <span class="product-price">ksh {{$BrandsProducts->price}}</span>
                                </div><!-- End .price-box -->
                                @endif
                                
                            @else 
                        
                            {{--  --}}
                            @if (session()->has('rates'))
                                
                                    <?php
                                        $rates = Session::get('rates');
                                        $Rates = DB::table('rates')->where('rates',$rates)->get();    
                                    ?>
                                    
                                    @foreach ($Rates as $rt)
                                    <div class="price-box">
                                       
                                        <span class="product-price">{{$rt->symbol}}<?php $total = $BrandsProducts->price*$rt->rates; echo ceil($total) ?></span>
                                    </div><!-- End .price-box -->
                                    @endforeach
                                
                                @else
                                <div class="price-box">
                                 
                                    <span class="product-price">ksh {{$BrandsProducts->price}}</span>
                                </div><!-- End .price-box -->
                                @endif
                            {{--  --}}
                            @endif
                        </div><!-- End .product-details -->
                    </div>
                    @endforeach
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo42-product.html">
                                <img src="{{asset('theme/assets/images/demoes/demo42/product/product13-300x300.jpg')}}"
                                    width="300" height="300" alt="product">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-17%</span>
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view" class="btn-quickview"
                                title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#">Auto Parts</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo42-product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <del class="old-price">$59.00</del>
                                <span class="product-price">$49.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo42-product.html">
                                <img src="{{asset('theme/assets/images/demoes/demo42/product/product6-300x300.jpg')}}"
                                    width="300" height="300" alt="product">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-35%</span>
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view" class="btn-quickview"
                                title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#">External Accessories</a>
                                    <a href="#">Hot Deals</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo42-product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <del class="old-price">$199.00</del>
                                <span class="product-price">$129.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
            </div>
            @endforeach
            {{-- <div class="brand-box">
                <div class="brand-name">
                    <h3>Shop Golden Grid:</h3>
                    <img src="{{asset('theme/assets/images/demoes/demo42/new_brand3.png')}}" width="140" height="60"
                        alt="brand" />
                </div>
                <div class="shop-products owl-carousel owl-theme dots-simple" data-owl-options="{
                    'loop': false,
                    'dots': true,
                    'nav': false,
                    'items': 2,
                    'margin': 30
                }">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo42-product.html">
                                <img src="{{asset('theme/assets/images/demoes/demo42/product/product3-300x300.jpg')}}"
                                    width="300" height="300" alt="product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view" class="btn-quickview"
                                title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#">Hot Deals</a>,
                                    <a href="#">Steering Wheels</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo42-product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$55.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo42-product.html">
                                <img src="{{asset('theme/assets/images/demoes/demo42/product/product14-300x300.jpg')}}"
                                    width="300" height="300" alt="product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view" class="btn-quickview"
                                title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#">Lanterns & lighting</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo42-product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo42-product.html">
                                <img src="{{asset('theme/assets/images/demoes/demo42/product/product6-300x300.jpg')}}"
                                    width="300" height="300" alt="product">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-35%</span>
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view" class="btn-quickview"
                                title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#">External Accessories</a>,
                                    <a href="#">Hot Deals</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo42-product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <del class="old-price">$199.00</del>
                                <span class="product-price">$129.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
            </div>
            <div class="brand-box">
                <div class="brand-name">
                    <h3>Shop David Smith:</h3>
                    <img src="{{asset('theme/assets/images/demoes/demo42/new_brand1.png')}}" width="140" height="60"
                        alt="brand" />
                </div>
                <div class="shop-products owl-carousel owl-theme dots-simple" data-owl-options="{
                    'loop': false,
                    'dots': true,
                    'nav': false,
                    'items': 2,
                    'margin': 30
                }">
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo42-product.html">
                                <img src="{{asset('theme/assets/images/demoes/demo42/product/product11-300x300.jpg')}}"
                                    width="300" height="300" alt="product">
                            </a>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view" class="btn-quickview"
                                title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#">Sound & Video</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo42-product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:80%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <span class="product-price">$299.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo42-product.html">
                                <img src="{{asset('theme/assets/images/demoes/demo42/product/product6-300x300.jpg')}}"
                                    width="300" height="300" alt="product">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-sale">-35%</span>
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view" class="btn-quickview"
                                title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#">External Accessories</a>,
                                    <a href="#">Hot Deals</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo42-product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <del class="old-price">$199.00</del>
                                <span class="product-price">$129.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                    <div class="product-default inner-quickview inner-icon">
                        <figure>
                            <a href="demo42-product.html">
                                <img src="{{asset('theme/assets/images/demoes/demo42/product/product7-300x300.jpg')}}"
                                    width="300" height="300" alt="product">
                            </a>
                            <div class="label-group">
                                <span class="product-label label-hot">HOT</span>
                                <span class="product-label label-sale">-35%</span>
                            </div>
                            <div class="btn-icon-group">
                                <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                        class="icon-shopping-cart"></i></a>
                            </div>
                            <a href="{{url('/')}}/product-quick-view" class="btn-quickview"
                                title="Quick View">Quick
                                View</a>
                        </figure>
                        <div class="product-details">
                            <div class="category-wrap">
                                <div class="category-list">
                                    <a href="#">Interior Accessories</a>
                                </div>
                                <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                        class="icon-heart"></i></a>
                            </div>
                            <h3 class="product-title">
                                <a href="demo42-product.html">Product Short Name</a>
                            </h3>
                            <div class="ratings-container">
                                <div class="product-ratings">
                                    <span class="ratings" style="width:0%"></span>
                                    <!-- End .ratings -->
                                    <span class="tooltiptext tooltip-top"></span>
                                </div><!-- End .product-ratings -->
                            </div><!-- End .product-container -->
                            <div class="price-box">
                                <del class="old-price">$199.00</del>
                                <span class="product-price">$129.00</span>
                            </div><!-- End .price-box -->
                        </div><!-- End .product-details -->
                    </div>
                </div>
            </div> --}}
        </div>
    </div>
</section>