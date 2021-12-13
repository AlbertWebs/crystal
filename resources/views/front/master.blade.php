<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Porto - Bootstrap eCommerce Template</title>

    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Porto - Bootstrap eCommerce Template">
    <meta name="author" content="SW-THEMES">

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('theme/assets/images/icons/favicon.png')}}">
    <link rel="preload" href="{{asset('theme/assets/vendor/fontawesome-free/webfonts/fa-regular-400.woff2')}}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('theme/assets/vendor/fontawesome-free/webfonts/fa-solid-900.woff2')}}" as="font" type="font/woff2"
        crossorigin="anonymous">
    <link rel="preload" href="{{asset('theme/assets/vendor/fontawesome-free/webfonts/fa-brands-400.woff2')}}" as="font" type="font/woff2"
        crossorigin="anonymous">

    <script>
        WebFontConfig = {
            google: { families: [ 'Open+Sans:400,600', 'Poppins:400,500,600,700' ] }
        };
        ( function ( d ) {
            var wf = d.createElement( 'script' ), s = d.scripts[ 0 ];
            wf.src = 'assets/js/webfont.js';
            wf.async = true;
            s.parentNode.insertBefore( wf, s );
        } )( document );
    </script>

    <!-- Plugins CSS File -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/bootstrap.min.css')}}">

    <!-- Main CSS File -->
    <link rel="stylesheet" href="{{asset('theme/assets/css/style.min.css')}}">
    <link rel="stylesheet" href="{{asset('theme/assets/css/demo42.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('theme/assets/vendor/fontawesome-free/css/all.min.css')}}">
</head>

<body>
    <div class="page-wrapper">
        <div class="top-notice bg-dark text-white pt-3">
            <div class="container text-center d-flex align-items-center justify-content-center flex-wrap">
                <h4 class="text-uppercase font-weight-bold mr-2">Deal of the week</h4>
                <h6>- 15% OFF in All Performance Parts -</h6>

                <a href="demo42-shop.html" class="ml-2">Shop Now</a>
            </div><!-- End .container -->
        </div><!-- End .top-notice -->

        <header class="header">
            <div class="header-top">
                <div class="container">
                    <div class="header-left d-none d-md-block">
                        <div class="info-box info-box-icon-left text-primary justify-content-start p-0">
                            <i class="icon-shipping"></i>

                            <div class="info-box-content">
                                <h4>FREE Next Day Delivery For Orders $35+</h4>
                            </div><!-- End .info-box-content -->
                        </div>
                    </div><!-- End .header-left -->

                    <div class="header-right header-dropdowns ml-0 ml-md-auto w-md-100">
                        <div class="header-dropdown ">
                            <a href="#">USD</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#">EUR</a></li>
                                    <li><a href="#">USD</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <div class="header-dropdown mr-auto mr-md-0">
                            <a href="#"><i class="flag-us flag"></i>ENG</a>
                            <div class="header-menu">
                                <ul>
                                    <li><a href="#"><i class="flag-us flag mr-2"></i>ENG</a>
                                    </li>
                                    <li><a href="#"><i class="flag-fr flag mr-2"></i>FRA</a></li>
                                </ul>
                            </div><!-- End .header-menu -->
                        </div><!-- End .header-dropown -->

                        <span class="separator d-none d-xl-block"></span>

                        <ul class="top-links mega-menu d-none d-xl-flex mb-0 pr-2">
                            <li class="menu-item menu-item-type-post_type menu-item-object-page narrow">
                                <a href="#"><i class="icon-pin"></i>Our Stores</a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom narrow">
                                <a href="#"><i class="icon-shipping-truck"></i>Track Your Order</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page narrow">
                                <a href="#"><i class="icon-help-circle"></i>Help</a></li>
                            <li class="menu-item menu-item-type-post_type menu-item-object-page narrow">
                                <a href="#"><i class="icon-wishlist-2"></i>Wishlist</a></li>
                        </ul>

                        <span class="separator d-none d-md-block mr-0 ml-4"></span>

                        <div class="social-icons">
                            <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                title="facebook"></a>
                            <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                title="twitter"></a>
                            <a href="#" class="social-icon social-instagram icon-instagram mr-0" target="_blank"
                                title="instagram"></a>
                        </div><!-- End .social-icons -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-top -->

            <div class="header-middle sticky-header" data-sticky-options="{'mobile': true}">
                <div class="container">
                    <div class="header-left col-lg-2 w-auto pl-0">
                        <button class="mobile-menu-toggler text-dark mr-2" type="button">
                            <i class="fas fa-bars"></i>
                        </button>
                        <a href="demo42.html" class="logo">
                            <img src="{{asset('theme/assets/images/demoes/demo42/shop42_logo.png')}}" class="w-100" width="202" height="80"
                                alt="Porto Logo">
                        </a>
                    </div><!-- End .header-left -->

                    <div class="header-right w-lg-max">
                        <div
                            class="header-icon header-search header-search-inline header-search-category w-lg-max text-right mb-0">
                            <a href="#" class="search-toggle" role="button"><i class="icon-search-3"></i></a>
                            <form action="#" method="get">
                                <div class="header-search-wrapper">
                                    <input type="search" class="form-control" name="q" id="q" placeholder="Search..."
                                        required>

                                    <button class="btn icon-magnifier p-0" title="search" type="submit"></button>
                                </div><!-- End .header-search-wrapper -->
                            </form>
                        </div><!-- End .header-search -->

                        <span class="separator d-none d-lg-block"></span>

                        <div class="sicon-box mb-0 d-none d-lg-flex align-items-center pr-3 mr-1">
                            <div class=" sicon-default">
                                <i class="icon-phone-1"></i>
                            </div>
                            <div class="sicon-header">
                                <h4 class="sicon-title ls-n-25">CALL US NOW</h4>
                                <p>+123 5678 890</p>
                            </div> <!-- header -->
                        </div>

                        <span class="separator d-none d-lg-block mr-4"></span>

                        <a href="login.html" class="d-lg-block d-none">
                            <div class="header-user">
                                <i class="icon-user-2"></i>
                                <div class="header-userinfo">
                                    <span>Welcome</span>
                                    <h4>Sign In / Register</h4>
                                </div>
                            </div>
                        </a>

                        <span class="separator d-block"></span>

                        <div class="dropdown cart-dropdown">
                            <a href="#" title="Cart" class="dropdown-toggle dropdown-arrow cart-toggle" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                <i class="icon-cart-thick"></i>
                                <span class="cart-count badge-circle">3</span>
                            </a>

                            <div class="cart-overlay"></div>

                            <div class="dropdown-menu mobile-cart">
                                <a href="#" title="Close (Esc)" class="btn-close">×</a>

                                <div class="dropdownmenu-wrapper custom-scrollbar">
                                    <div class="dropdown-cart-header">Shopping Cart</div>
                                    <!-- End .dropdown-cart-header -->

                                    <div class="dropdown-cart-products">
                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo42-product.html">Ultimate 3D Bluetooth Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $99.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo42-product.html" class="product-image">
                                                    <img src="{{asset('theme/assets/images/products/product-1.jpg')}}" alt="product"
                                                        width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo42-product.html">Brown Women Casual HandBag</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo42-product.html" class="product-image">
                                                    <img src="{{asset('theme/assets/images/products/product-2.jpg')}}" alt="product"
                                                        width="80" height="80">
                                                </a>

                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->

                                        <div class="product">
                                            <div class="product-details">
                                                <h4 class="product-title">
                                                    <a href="demo42-product.html">Circled Ultimate 3D Speaker</a>
                                                </h4>

                                                <span class="cart-product-info">
                                                    <span class="cart-product-qty">1</span>
                                                    × $35.00
                                                </span>
                                            </div><!-- End .product-details -->

                                            <figure class="product-image-container">
                                                <a href="demo42-product.html" class="product-image">
                                                    <img src="{{asset('theme/assets/images/products/product-3.jpg')}}" alt="product"
                                                        width="80" height="80">
                                                </a>
                                                <a href="#" class="btn-remove" title="Remove Product"><span>×</span></a>
                                            </figure>
                                        </div><!-- End .product -->
                                    </div><!-- End .cart-product -->

                                    <div class="dropdown-cart-total">
                                        <span>SUBTOTAL:</span>

                                        <span class="cart-total-price float-right">$134.00</span>
                                    </div><!-- End .dropdown-cart-total -->

                                    <div class="dropdown-cart-action">
                                        <a href="cart.html" class="btn btn-gray btn-block view-cart">View
                                            Cart</a>
                                        <a href="checkout.html" class="btn btn-dark btn-block">Checkout</a>
                                    </div><!-- End .dropdown-cart-total -->
                                </div><!-- End .dropdownmenu-wrapper -->
                            </div><!-- End .dropdown-menu -->
                        </div><!-- End .dropdown -->
                    </div><!-- End .header-right -->
                </div><!-- End .container -->
            </div><!-- End .header-middle -->

            <div class="header-bottom sticky-header d-none d-lg-flex" data-sticky-options="{'mobile': false}">
                <div class="container">
                    <nav class="main-nav w-100">
                        <ul class="menu w-100">
                            <li class="menu-item d-flex align-items-center">
                                <a href="#" class="d-inline-flex align-items-center sf-with-ul">
                                    <i class="custom-icon-toggle-menu d-inline-table"></i><span>All
                                        Departments</span></a>
                                <div class="menu-depart">
                                    <a href="#"><i class="icon-category-motorcycles"></i>Auto Parts</a>

                                    <a href="#">
                                        <i class="icon-category-internal-accessories"></i>Interior Accessories
                                    </a>

                                    <a href="#"><i class="icon-category-mechanics"></i>Performance</a>

                                    <a href="#"><i class="icon-category-sound-video"></i>Sound & Video</a>

                                    <a href="#"><i class="icon-category-steering"></i>Steering Wheels</a>

                                </div>
                            </li>
                            <li class="active">
                                <a href="demo42.html">Home</a>
                            </li>
                            <li>
                                <a href="demo42-shop.html">Shop</a>
                                <div class="megamenu megamenu-fixed-width megamenu-3cols">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 1</a>
                                            <ul class="submenu">
                                                <li><a href="demo42-shop.html" title="shop">Fullwidth Banner</a></li>
                                                <li><a href="category-banner-boxed-slider.html">Boxed Slider
                                                        Banner</a>
                                                </li>
                                                <li><a href="category-banner-boxed-image.html">Boxed Image
                                                        Banner</a>
                                                </li>
                                                <li><a href="demo42-shop.html" title="shop">Left Sidebar</a></li>
                                                <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                                                <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                                                <li><a href="category-horizontal-filter1.html">Horizontal
                                                        Filter1</a>
                                                </li>
                                                <li><a href="category-horizontal-filter2.html">Horizontal
                                                        Filter2</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">VARIATION 2</a>
                                            <ul class="submenu">
                                                <li><a href="category-list.html">List Types</a></li>
                                                <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll</a>
                                                </li>
                                                <li><a href="demo42-shop.html" title="shop">3 Columns Products</a></li>
                                                <li><a href="category-4col.html">4 Columns Products</a></li>
                                                <li><a href="category-5col.html">5 Columns Products</a></li>
                                                <li><a href="category-6col.html">6 Columns Products</a></li>
                                                <li><a href="category-7col.html">7 Columns Products</a></li>
                                                <li><a href="category-8col.html">8 Columns Products</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner">
                                                <figure>
                                                    <img src="{{asset('theme/assets/images/menu-banner.jpg')}}" width="192" height="313"
                                                        alt="Menu banner">
                                                </figure>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                        <i>OFF</i>
                                                    </h4>
                                                    <a href="demo42-shop.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="demo42-product.html">Products</a>
                                <div class="megamenu megamenu-fixed-width">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">PRODUCT PAGES</a>
                                            <ul class="submenu">
                                                <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                                <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                                <li><a href="product.html">SALE PRODUCT</a></li>
                                                <li><a href="product.html">FEATURED & ON SALE</a></li>
                                                <li><a href="product-custom-tab.html">WITH CUSTOM TAB</a></li>
                                                <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                                <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                                <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->

                                        <div class="col-lg-4">
                                            <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                            <ul class="submenu">
                                                <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                                <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                                <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                                <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                                <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                                <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a>
                                                </li>
                                                <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                                <li><a href="#">BUILD YOUR OWN</a></li>
                                            </ul>
                                        </div><!-- End .col-lg-4 -->

                                        <div class="col-lg-4 p-0">
                                            <div class="menu-banner menu-banner-2">
                                                <figure>
                                                    <img src="{{asset('theme/assets/images/menu-banner-1.jpg')}}" alt="Menu banner"
                                                        class="product-promo">
                                                </figure>
                                                <i>OFF</i>
                                                <div class="banner-content">
                                                    <h4>
                                                        <span class="">UP TO</span><br />
                                                        <b class="">50%</b>
                                                    </h4>
                                                </div>
                                                <a href="demo42-shop.html" class="btn btn-sm btn-dark">SHOP NOW</a>
                                            </div>
                                        </div><!-- End .col-lg-4 -->
                                    </div><!-- End .row -->
                                </div><!-- End .megamenu -->
                            </li>
                            <li>
                                <a href="#">Pages</a>
                                <ul>
                                    <li><a href="wishlist.html">Wishlist</a></li>
                                    <li><a href="cart.html">Shopping Cart</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Blog</a>
                                        <ul>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="single.html">Blog Post</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html">Contact Us</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="forgot-password.html">Forgot Password</a></li>
                                </ul>
                            </li>
                            <li><a href="https://1.envato.market/DdLk5" rel="noopener" target="_blank">Buy Porto!</a>
                            </li>
                            <li class="float-right"><a href="#" class="pr-0">Special Offers</a></li>
                        </ul>
                    </nav>
                </div><!-- End .container -->
            </div><!-- End .header-bottom -->
        </header><!-- End .header -->

        @yield('content')

        <footer class="footer bg-dark position-relative">
            <div class="footer-middle">
                <div class="container position-static">
                    <div class="row">
                        <div class="col-lg-2 col-sm-6 pb-2 pb-sm-0 d-flex align-items-center">
                            <div class="widget m-b-3">
                                <img src="{{asset('theme/assets/images/demoes/demo42/footer-logo.png')}}" alt="Logo" width="202"
                                    height="54" class="logo-footer">
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-4 pb-sm-0">
                            <div class="widget mb-2">
                                <h4 class="widget-title mb-1 pb-1">Get In Touch</h4>
                                <ul class="contact-info">
                                    <li>
                                        <span class="contact-info-label">Address:</span>123 Street Name, City, England
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Phone:</span><a href="tel:">Toll Free (123)
                                            456-7890</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Email:</span> <a
                                            href="mailto:mail@example.com">mail@example.com</a>
                                    </li>
                                    <li>
                                        <span class="contact-info-label">Working Days/Hours:</span>
                                        Mon - Sun / 9:00 AM - 8:00 PM
                                    </li>
                                </ul>
                                <div class="social-icons">
                                    <a href="#" class="social-icon social-facebook icon-facebook" target="_blank"
                                        title="Facebook"></a>
                                    <a href="#" class="social-icon social-twitter icon-twitter" target="_blank"
                                        title="Twitter"></a>
                                    <a href="#" class="social-icon social-linkedin fab fa-linkedin-in" target="_blank"
                                        title="Linkedin"></a>
                                    <a href="#" class="social-icon social-instagram fab fa-instagram" target="_blank"
                                        title="instagram"></a>
                                </div><!-- End .social-icons -->
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-3 col-sm-6 pb-2 pb-sm-0">
                            <div class="widget">
                                <h4 class="widget-title pb-1">Customer Services</h4>

                                <ul class="links">
                                    <li><a href="#">Help &amp; FAQs</a></li>
                                    <li><a href="#">Order Tracking</a></li>
                                    <li><a href="#">Shipping &amp; Delivery</a></li>
                                    <li><a href="#">Orders History</a></li>
                                    <li><a href="#">Advanced Search</a></li>
                                    <li><a href="login.html">Login</a></li>
                                    <li><a href="#">Careers</a></li>
                                    <li><a href="demo1-about.html">About Us</a></li>
                                    <li><a href="#">Corporate Sales</a></li>
                                </ul>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->

                        <div class="col-lg-4 col-sm-6 pb-0">
                            <div class="widget widget-newsletter mb-1 mb-sm-3">
                                <h4 class="widget-title">Subscribe Newsletter</h4>

                                <p class="mb-2">Get all the latest information on events, sales and offers.
                                    Sign up for newsletter:</p>
                                <form action="#" class="d-flex mb-0 w-100">
                                    <input type="email" class="form-control mb-0" placeholder="Email address"
                                        required="">

                                    <input type="submit" class="btn shadow-none" value="OK">
                                </form>
                            </div><!-- End .widget -->
                        </div><!-- End .col-lg-3 -->
                    </div><!-- End .row -->
                </div><!-- End .container -->
            </div><!-- End .footer-middle -->

            <div class="container">
                <div class="footer-bottom d-sm-flex align-items-center bg-dark">
                    <div class="footer-left">
                        <span class="footer-copyright">Crystal Car Audio. Copyright © <?php echo date('Y') ?>. All Rights Reserved</span>
                    </div>

                    <div class="footer-right ml-auto mt-1 mt-sm-0">
                        <div class="payment-icons">
                            <span class="payment-icon visa"
                                style="background-image: url({{asset('theme/assets/images/payments/payment-visa.svg')}})"></span>
                            <span class="payment-icon paypal"
                                style="background-image: url({{asset('theme/assets/images/payments/payment-paypal.svg')}})"></span>
                            <span class="payment-icon stripe"
                                style="background-image: url({{asset('theme/assets/images/payments/payment-stripe.png')}})"></span>
                            <span class="payment-icon verisign"
                                style="background-image:  url({{asset('theme/assets/images/payments/payment-verisign.svg')}})"></span>
                        </div>
                    </div>
                </div>
            </div><!-- End .footer-bottom -->
        </footer>
    </div><!-- End .page-wrapper -->

    <div class="loading-overlay">
        <div class="bounce-loader">
            <div class="bounce1"></div>
            <div class="bounce2"></div>
            <div class="bounce3"></div>
        </div>
    </div>

    <div class="mobile-menu-overlay"></div><!-- End .mobil-menu-overlay -->

    <div class="mobile-menu-container">
        <div class="mobile-menu-wrapper">
            <span class="mobile-menu-close"><i class="fa fa-times"></i></span>
            <nav class="mobile-nav">
                <ul class="mobile-menu">
                    <li><a href="demo42.html">Home</a></li>
                    <li>
                        <a href="demo42-shop.html" title="shop">Categories</a>
                        <ul>
                            <li><a href="category.html">Full Width Banner</a></li>
                            <li><a href="category-banner-boxed-slider.html">Boxed Slider Banner</a></li>
                            <li><a href="category-banner-boxed-image.html">Boxed Image Banner</a></li>
                            <li><a href="https://www.portotheme.com/html/porto_ecommerce/category-sidebar-left.html">Left Sidebar</a></li>
                            <li><a href="category-sidebar-right.html">Right Sidebar</a></li>
                            <li><a href="category-off-canvas.html">Off Canvas Filter</a></li>
                            <li><a href="category-horizontal-filter1.html">Horizontal Filter 1</a></li>
                            <li><a href="category-horizontal-filter2.html">Horizontal Filter 2</a></li>
                            <li><a href="#">List Types</a></li>
                            <li><a href="category-infinite-scroll.html">Ajax Infinite Scroll<span
                                        class="tip tip-new">New</span></a></li>
                            <li><a href="demo42-shop.html" title="shop">3 Columns Products</a></li>
                            <li><a href="category-4col.html">4 Columns Products</a></li>
                            <li><a href="category-5col.html">5 Columns Products</a></li>
                            <li><a href="category-6col.html">6 Columns Products</a></li>
                            <li><a href="category-7col.html">7 Columns Products</a></li>
                            <li><a href="category-8col.html">8 Columns Products</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="demo42-product.html">Products</a>
                        <ul>
                            <li>
                                <a href="#" class="nolink">PRODUCT PAGES</a>
                                <ul>
                                    <li><a href="product.html">SIMPLE PRODUCT</a></li>
                                    <li><a href="product-variable.html">VARIABLE PRODUCT</a></li>
                                    <li><a href="product.html">SALE PRODUCT</a></li>
                                    <li><a href="product.html">FEATURED & ON SALE</a></li>
                                    <li><a href="product-sticky-info.html">WIDTH CUSTOM TAB</a></li>
                                    <li><a href="product-sidebar-left.html">WITH LEFT SIDEBAR</a></li>
                                    <li><a href="product-sidebar-right.html">WITH RIGHT SIDEBAR</a></li>
                                    <li><a href="product-addcart-sticky.html">ADD CART STICKY</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#" class="nolink">PRODUCT LAYOUTS</a>
                                <ul>
                                    <li><a href="product-extended-layout.html">EXTENDED LAYOUT</a></li>
                                    <li><a href="product-grid-layout.html">GRID IMAGE</a></li>
                                    <li><a href="product-full-width.html">FULL WIDTH LAYOUT</a></li>
                                    <li><a href="product-sticky-info.html">STICKY INFO</a></li>
                                    <li><a href="product-sticky-both.html">LEFT & RIGHT STICKY</a></li>
                                    <li><a href="product-transparent-image.html">TRANSPARENT IMAGE</a></li>
                                    <li><a href="product-center-vertical.html">CENTER VERTICAL</a></li>
                                    <li><a href="#">BUILD YOUR OWN</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages<span class="tip tip-hot">Hot!</span></a>
                        <ul>
                            <li>
                                <a href="wishlist.html">Wishlist</a>
                            </li>
                            <li>
                                <a href="cart.html">Shopping Cart</a>
                            </li>
                            <li>
                                <a href="checkout.html">Checkout</a>
                            </li>
                            <li>
                                <a href="dashboard.html">Dashboard</a>
                            </li>
                            <li>
                                <a href="login.html">Login</a>
                            </li>
                            <li>
                                <a href="forgot-password.html">Forgot Password</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="blog.html">Blog</a></li>
                    <li>
                        <a href="#">Elements</a>
                        <ul class="custom-scrollbar">
                            <li><a href="element-accordions.html">Accordion</a></li>
                            <li><a href="element-alerts.html">Alerts</a></li>
                            <li><a href="element-animations.html">Animations</a></li>
                            <li><a href="element-banners.html">Banners</a></li>
                            <li><a href="element-buttons.html">Buttons</a></li>
                            <li><a href="element-call-to-action.html">Call to Action</a></li>
                            <li><a href="element-countdown.html">Count Down</a></li>
                            <li><a href="element-counters.html">Counters</a></li>
                            <li><a href="element-headings.html">Headings</a></li>
                            <li><a href="element-icons.html">Icons</a></li>
                            <li><a href="element-info-box.html">Info box</a></li>
                            <li><a href="element-posts.html">Posts</a></li>
                            <li><a href="element-products.html">Products</a></li>
                            <li><a href="element-product-categories.html">Product Categories</a></li>
                            <li><a href="element-tabs.html">Tabs</a></li>
                            <li><a href="element-testimonial.html">Testimonials</a></li>
                        </ul>
                    </li>
                </ul>

                <ul class="mobile-menu mt-2 mb-2">
                    <li class="border-0">
                        <a href="#">
                            Special Offer!
                        </a>
                    </li>
                    <li class="border-0">
                        <a href="https://1.envato.market/DdLk5" target="_blank" rel="noopener" title="buy-porto">
                            Buy Porto!
                            <span class="tip tip-hot">Hot</span>
                        </a>
                    </li>
                </ul>

                <ul class="mobile-menu">
                    <li><a href="login.html">My Account</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="wishlist.html">My Wishlist</a></li>
                    <li><a href="cart.html">Cart</a></li>
                    <li><a href="login.html" class="login-link">Log In</a></li>
                </ul>
            </nav><!-- End .mobile-nav -->

            <form class="search-wrapper mb-2" action="#">
                <input type="text" class="form-control mb-0" placeholder="Search..." required />
                <button class="btn icon-search text-white bg-transparent p-0" title="submit" type="submit"></button>
            </form>

            <div class="social-icons">
                <a href="#" class="social-icon social-facebook icon-facebook" target="_blank" title="facebook">
                </a>
                <a href="#" class="social-icon social-twitter icon-twitter" target="_blank" title="twitter">
                </a>
                <a href="#" class="social-icon social-instagram icon-instagram" target="_blank" title="instagram">
                </a>
            </div>
        </div><!-- End .mobile-menu-wrapper -->
    </div><!-- End .mobile-menu-container -->

    <div class="sticky-navbar">
        <div class="sticky-info">
            <a href="demo42.html">
                <i class="icon-home"></i>Home
            </a>
        </div>
        <div class="sticky-info">
            <a href="demo42-shop.html" class="">
                <i class="icon-bars"></i>Categories
            </a>
        </div>
        <div class="sticky-info">
            <a href="wishlist.html" class="">
                <i class="icon-wishlist-2"></i>Wishlist
            </a>
        </div>
        <div class="sticky-info">
            <a href="login.html" class="">
                <i class="icon-user-2"></i>Account
            </a>
        </div>
        <div class="sticky-info">
            <a href="cart.html" class="">
                <i class="icon-shopping-cart position-relative">
                    <span class="cart-count badge-circle">3</span>
                </i>Cart
            </a>
        </div>
    </div>

    <div class="newsletter-popup mfp-hide bg-img" id="newsletter-popup-form"
        style="background: #f1f1f1 no-repeat center/cover url({{asset('theme/assets/images/newsletter_popup_bg.jpg')}})">
        <div class="newsletter-popup-content">
            <img src="{{asset('theme/assets/images/logo-black.png')}}" alt="Logo" class="logo-newsletter" width="111" height="44">
            <h2>Subscribe to newsletter</h2>

            <p>
                Subscribe to the Porto mailing list to receive updates on new
                arrivals, special offers and our promotions.
            </p>

            <form action="#">
                <div class="input-group">
                    <input type="email" class="form-control" id="newsletter-email" name="newsletter-email"
                        placeholder="Your email address" required />
                    <input type="submit" class="btn btn-primary" value="Submit" />
                </div>
            </form>
            <div class="newsletter-subscribe">
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" value="0" id="show-again" />
                    <label for="show-again" class="custom-control-label">
                        Don't show this popup again
                    </label>
                </div>
            </div>
        </div><!-- End .newsletter-popup-content -->

        <button title="Close (Esc)" type="button" class="mfp-close">
            ×
        </button>
    </div><!-- End .newsletter-popup -->

    <a id="scroll-top" href="#top" title="Top" role="button"><i class="icon-angle-up"></i></a>

    <!-- Plugins JS File -->
    <script src="{{asset('theme/assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/optional/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/plugins.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.appear.min.js')}}"></script>
    <script src="{{asset('theme/assets/js/jquery.plugin.min.js')}}"></script>

    <!-- Main JS File -->
    <script src="{{asset('theme/assets/js/main.min.js')}}"></script>
</body>


</html>