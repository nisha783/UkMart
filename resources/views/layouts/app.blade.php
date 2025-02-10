<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">

    <!-- Site Title -->
    <title>@yield('title', 'Default Title')</title>


    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/odometer.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <!-- Tailwind CSS Integration -->
</head>

<body>
    <!-- header-area-start -->
    <header class="header sticky-active">
        <div class="top-bar">
            <div class="container">
                <div class="top-bar-inner">
                    <div class="top-bar-left">
                        <ul class="top-left-list">
                            <li><a href="about.html">About</a></li>
                            <li><a href="{{ route('user.dashboard.index') }}">My Account</a></li>
                            <li><a href="{{ route('track.index') }}">Track Order</a></li>
                            <li><a href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                    <div class="top-bar-middle">
                        <span>Free shipping for all orders of 150$</span>
                    </div>
                    <div class="top-bar-right">
                        <ul class="top-right-list">
                            <li><a href="contact.html">Store Location</a></li>
                            <li>
                                <a href="javascript:void(0)"
                                    onclick="document.getElementById('logout-form').submit();">Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="logout-form">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-middle">
            <div class="container">
                <div class="header-middle-inner">
                    <div class="header-middle-left">
                        <div class="header-logo d-lg-block">
                            <a href="index.html">
                                <img src="{{ asset('assets/logo.png') }}" alt="Logo">
                            </a>
                        </div>
                        @livewire('search-result')
                    </div>
                    <div class="header-middle-right">
                        <ul class="contact-item-list">
                            <li>
                                <div class="content">
                                    <span>Call Us Now:</span>
                                    <a class="number"
                                        href="tel:+25821592159">{{ site_setting('website_contact_number') }}</a>
                                </div>
                                <a href="#" class="icon">
                                    <i class="fa-regular fa-phone"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('user.wishlist.index') }}" class="icon">
                                    <i class="fa-sharp fa-regular fa-heart"></i>
                                </a>
                            </li>
                            @livewire('cart-wrapper')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="primary-header">
            <div class="container">
                <div class="primary-header-inner">
                    <div class="header-logo mobile-logo">
                        <a href="index.html">
                            <img src="{{ asset('assets/logo.png') }}" alt="Logo">
                        </a>
                    </div>
                    <div class="header-menu-wrap">
                        <div class="mobile-menu-items">
                            <ul>
                                <li>
                                    <a href="{{ url('/') }}" class="active">Home</a>
                                </li>
                                <li><a href="{{ route('contact.index') }}">Contact</a></li>
                                <li><a href="{{ route('about.index') }}">About Us</a></li>
                                <li><a href="{{ route('blog.index') }}">BlogPost</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- /.header-menu-wrap -->
                    <div class="header-right-wrap">
                        <div class="header-right">
                            <span>Get 30% Discount Now <span>Sale</span></span>
                            <div class="header-right-item">
                                <a href="javascript:void(0)" class="mobile-side-menu-toggle"><i
                                        class="fa-sharp fa-solid fa-bars"></i></a>
                            </div>
                        </div>
                        <!-- /.header-right -->
                    </div>
                </div>
                <!-- /.primary-header-inner -->
            </div>
        </div>
    </header>
    <!-- /.Main Header -->

    <div id="popup-search-box">
        <div class="box-inner-wrap d-flex align-items-center">
            <form id="form" action="#" method="get" role="search">
                <input id="popup-search" type="text" name="search" placeholder="Type keywords here...">
            </form>
            <div class="search-close"><i class="fa-sharp fa-regular fa-xmark"></i></div>
        </div>
    </div>


    <!-- /#popup-search-box -->

    <div class="mobile-side-menu">
        <div class="side-menu-content">
            <div class="side-menu-head">
                <a href='index.html'><img src="{{ asset('assets/logo.png') }}" alt="logo"></a>
                <button class="mobile-side-menu-close"><i class="fa-regular fa-xmark"></i></button>
            </div>
            <div class="side-menu-list search-result">
                <form action="{{ route('search.store') }}" method="POST" role="search">
                    @csrf
                    <input type="search" class="form-control" name="keyword" placeholder="Search here...">
                    <button type="submit" class="rr-primary-btn mt-3"><i class="fa-regular fa-search"></i></button>
                </form>
            </div>
            <div class="side-menu-wrap"></div>
            <ul class="side-menu-list">
                <li><i class="fa-light fa-location-dot"></i>Address :
                    <span>{{ site_setting('website_contact_address') }}</span>
                </li>
                <li><i class="fa-light fa-phone"></i>Phone : <a
                        href="tel:+01569896654">{{ site_setting('website_contact_number') }}</a></li>
                <li><i class="fa-light fa-envelope"></i>Email : <a
                        href="mailto:info@example.com">{{ site_setting('website_contact_email') }}</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.mobile-side-menu -->

    @if (site_setting('website_loader', 0))
        <div id="preloader">
            <div class="preloader-close">X</div>
            <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1"></div>
                <div class="sk-child sk-bounce2"></div>
                <div class="sk-child sk-bounce3"></div>
            </div>
        </div>
    @endif
    <!-- ./ preloader -->

    <section class="page-header">
        <div class="shape"><img src="{{ asset('assets/img/shapes/page-header-shape.png') }}" alt="shape">
        </div>
        @yield('breadcrumb')

    </section>
    <!-- ./ page-header -->

    
    <section class="login-area pt-100 pb-100">
        <div class="container">
           
            @yield('content')
        </div>
    </section>

    <footer class="footer-section bg-grey pt-60">
        <div class="container">
            <div class="footer-items">
                <div class="footer-item">
                    <div class="icon">
                        <img src="{{ asset('assets/img/icon/footer-1.png') }}" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Free Shipping</h4>
                        <span>Free shipping on orders over $65</span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="icon">
                        <img src="{{ asset('assets/img/icon/footer-1.png') }}" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Free Returns</h4>
                        <span>30-days free return polic</span>
                    </div>
                </div>
                <div class="footer-item">
                    <div class="icon">
                        <img src="{{ asset('assets/img/icon/footer-1.png') }}" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Secured Payments</h4>
                        <span>We accept all major credit card</span>
                    </div>
                </div>
                <div class="footer-item item-2">
                    <div class="icon">
                        <img src="{{ asset('assets/img/icon/footer-1.png') }}" alt="icon">
                    </div>
                    <div class="content">
                        <h4 class="title">Customer Service</h4>
                        <span>Top notch customer service</span>
                    </div>
                </div>
            </div>
            <div class="row footer-widget-wrap pb-60">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">About Store</h3>
                        </div>
                        <div class="footer-contact">
                            <div class="icon"><i class="fa-sharp fa-solid fa-phone-rotary"></i></div>
                            <div class="content">
                                <span>Have Question? Call Us 24/7</span>
                                <a href="tel:+25836922569">{{ site_setting('website_contact_number') }}</a>
                            </div>
                        </div>
                        <ul class="schedule-list">
                            <li><span>Monday - Friday:</span>8:00am - 6:00pm</li>
                            <li><span>Saturday:</span>8:00am - 6:00pm</li>
                            <li><span>Sunday</span> Service Close</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Our Stores</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="javascript:void(0)">New York</a></li>
                            <li><a href="javascript:void(0)">London SF</a></li>
                            <li><a href="javascript:void(0)">Los Angele</a></li>
                            <li><a href="javascript:void(0)">Chicago</a></li>
                            <li><a href="javascript:void(0)">Las Vegas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Shop Categories</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="javascript:void(0)">New Arrivals</a></li>
                            <li><a href="javascript:void(0)">Best Selling</a></li>
                            <li><a href="javascript:void(0)">Vegetables</a></li>
                            <li><a href="javascript:void(0)">Fresh Meat</a></li>
                            <li><a href="javascript:void(0)">Fresh Seafood</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Useful Links</h3>
                        </div>
                        <ul class="footer-list">
                            <li><a href="{{ route('privacy.index') }}">privacy policy</a></li>
                            <li><a href="{{ route('condition.index') }}">Terms & Conditions</a></li>
                            <li><a href="{{ route('contact.index') }}">Contact Us</a></li>
                            <li><a href="{{ route('about.index') }}">About Us</a></li>
                            <li><a href="{{ route('news.index') }}">Latest News</a></li>
                            <li><a href="{{ route('refund.index') }}">Refunds Policy</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <div class="widget-header">
                            <h3 class="widget-title">Our Newsletter</h3>
                        </div>
                        <div class="news-form-wrap">
                            <p class="mb-20">Subscribe to the mailing list to receive updates one the new arrivals and
                                other discounts</p>
                            <div class="footer-form mb-20">
                                <form action="{{ route('newsletter.store') }}" method="post" class="rr-subscribe-form">
                                    @csrf
                                    <input class="form-control" type="email" name="email" placeholder="Email address">
                                    <input type="hidden" name="action" value="mailchimpsubscribe">
                                    <button class="btn btn-danger">Subscribe</button>
                                    <div class="clearfix"></div>
                                </form>
                            </div>
                            <p class="mb-0">I would like to receive news and special offer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row copyright-content">
                    <div class="col-lg-6">
                        <div class="footer-img-wrap">
                            <span>Payment System:</span>
                            <div class="footer-img"><a href="#"><img
                                        src="{{ asset('assets/img/images/footer-img-1.png') }}" alt="img"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <p>Copyright & Design {{ date('Y') }} <span>©{{ config('app.name', 'Laravel') }}</span>.
                            All Right Reserved</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ./ footer-section -->

    <div id="scroll-percentage"><span id="scroll-percentage-value"></span></div>
    <!--scrollup-->
    <script src="{{ asset('assets/js/vendor/jquary-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/bootstrap-bundle.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/imagesloaded-pkgd.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/waypoints.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/venobox.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/meanmenu.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/smooth-scroll.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/jquery.isotope.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/countdown.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendor/nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/ajax-form.js') }}"></script>
    <script src="{{ asset('assets/js/contact.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    @include('inc.alert')
    <script>
        // Listen for cart updates
        Livewire.on('cart-updated', ({
            count
        }) => {
            // Update cart count in navbar or wherever you display it
            const cartCountElement = document.getElementById('cart-count');
            if (cartCountElement) {
                cartCountElement.textContent = count;
            }
        });

        // Listen for notifications
        Livewire.on('notify', ({
            message,
            type
        }) => {
            // Use your preferred notification library (e.g., Toastr, Sweet Alert)
            // Example with Toastr:
            toastr[type](message);
        });
    </script>

</body>

</html>