<section class="product-section1 recently">
    <div class="container">
        <h2 class="title title-underline pb-1 appear-animate" data-animation-name="fadeInLeftShorter">
            Recently Arrived</h2>
        <div class="owl-carousel owl-theme appear-animate" data-owl-options="{
                'loop': true,
                'dots': true,
                'nav': false,
                'margin': 20,
                'responsive': {
                    '0': {
                        'items': 2
                    },
                    '576': {
                        'items': 4
                    },
                    '991': {
                        'items': 6
                    }
                }
            }">

            <?php $NewlyAdded = DB::table('product')->orderBy('id','DESC')->limit('7')->get(); ?>
            @foreach ($NewlyAdded as $new)
            <div class="product-default inner-quickview inner-icon">
                <figure>
                    <a href="{{url('/')}}/product/{{$new->slung}}">
                        <img src="{{url('/')}}/uploads/product/{{$new->thumbnail}}" width="300"
                            height="300" alt="{{$new->name}}">
                    </a>
                    <div class="label-group">
                        <span class="product-label label-sale">-13%</span>
                    </div>
                    <div class="btn-icon-group">
                        <a href="#" class="btn-icon btn-add-cart product-type-simple"><i
                                class="icon-shopping-cart"></i></a>
                    </div>
                    <a href="{{url('/')}}/product-quick-view/{{$new->slung}}" class="btn-quickview" title="Quick View">Quick
                        View</a>
                </figure>
                <div class="product-details">
                    <div class="category-wrap">
                        <div class="category-list">
                            <?php $Category = DB::table('category')->where('id',$new->cat)->get(); ?>
                            @foreach($Category as $cat)
                            <a  href="{{url('/')}}/products/{{$cat->slung}}">{{$cat->cat}}</a>
                            @endforeach
                        </div>
                        <a href="wishlist.html" class="btn-icon-wish" title="wishlist"><i
                                class="icon-heart"></i></a>
                    </div>
                    <h3 class="product-title">
                        <a target="new" href="{{url('/')}}/product/{{$new->slung}}">{{$new->name}}</a>
                    </h3>
                    <div class="ratings-container">
                        <div class="product-ratings">
                            <span class="ratings" style="width:0%"></span>
                            <!-- End .ratings -->
                            <span class="tooltiptext tooltip-top"></span>
                        </div><!-- End .product-ratings -->
                    </div><!-- End .product-container -->
                    <div class="price-box">
                        <del class="old-price">$299.00</del>
                        <span class="product-price">$259.00</span>
                    </div><!-- End .price-box -->
                </div><!-- End .product-details -->
            </div>
            @endforeach
        </div>
    </div>
</section>