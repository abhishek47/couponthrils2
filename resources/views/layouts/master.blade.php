<!DOCTYPE html>
<!--[if lt IE 9 ]> <html lang="en" dir="ltr" class="no-js ie-old"> <![endif]-->
<!--[if IE 9 ]> <html lang="en" dir="ltr" class="no-js ie9"> <![endif]-->
<!--[if IE 10 ]> <html lang="en" dir="ltr" class="no-js ie10"> <![endif]-->
<!--[if (gt IE 10)|!(IE)]><!-->
<html lang="en" dir="ltr" class="no-js">
<!--<![endif]-->

<head>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- META TAGS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta charset="utf-8">
    <!-- Always force latest IE rendering engine -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Mobile specific meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE TITLE                                -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <title>CouponThrills | Coupons, Deals, Discounts and Promo codes</title>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SEO METAS                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <meta name="description" content="FRIDAY is a responsive multipurpose-ecommerce site template allows you to store coupons and promo codes from different brands and create store for deals, discounts, It can be used as coupon website such as groupon.com and also as online store">
    <meta name="	black friday, coupon, coupon codes, coupon theme, coupons, deal news, deals, discounts, ecommerce, friday deals, groupon, promo codes, responsive, shop, store coupons">
    <meta name="robots" content="index, follow">
    <meta name="author" content="CODASTROID">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PAGE FAVICON                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link rel="apple-touch-icon" href="assets/images/favicon/apple-touch-icon.png">
    <link rel="icon" href="assets/images/favicon/favicon.ico">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- GOOGLE FONTS                              -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Include CSS Filess                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!-- Linearicons -->
    <link href="/css/linearicons.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="/css/owl.carousel.min.css" rel="stylesheet">
    <link href="/css/owl.theme.min.css" rel="stylesheet">

    <!-- Flex Slider -->
    <link href="/css/flexslider.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/css/base.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">

</head>

<body id="body" class="wide-layout preloader-active">

    <!--[if lt IE 9]>
        <p class="browserupgrade alert-error">
        	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
        </p>
    <![endif]-->

    <noscript>
        <div class="noscript alert-error">
            For full functionality of this site it is necessary to enable JavaScript. Here are the <a href="http://www.enable-javascript.com/" target="_blank">
		 instructions how to enable JavaScript in your web browser</a>.
        </div>
    </noscript>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- PRELOADER                                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Preloader -->
    <div id="preloader" class="preloader">
        <div class="loader-cube">
            <div class="loader-cube__item1 loader-cube__item"></div>
            <div class="loader-cube__item2 loader-cube__item"></div>
            <div class="loader-cube__item4 loader-cube__item"></div>
            <div class="loader-cube__item3 loader-cube__item"></div>
        </div>
    </div>
    <!-- End Preloader -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- WRAPPER                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="pageWrapper" class="page-wrapper">
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->
        <header id="mainHeader" class="main-header">

            <!-- Top Bar -->
            <div class="top-bar bg-gray">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-4 is-hidden-sm-down">
                            <ul class="nav-top nav-top-left list-inline t-left">
                                <li><a href="terms_conditions.html"><i class="fa fa-question-circle"></i>Discounts Guide</a>
                                </li>
                                <li><a href="faq.html"><i class="fa fa-support"></i>Customer Assistance</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-12 col-md-8">
                            <ul class="nav-top nav-top-right list-inline t-xs-center t-md-right">
                                <li>
                                    <a href="#"><i class="fa fa-flag-en"></i>English </a>
                                    
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-inr"></i>INR </a>
                                    
                                </li>
                                @auth
                                    <li><a href="/home"><i class="fa fa-user"></i>{{ auth()->user()->name }}</a>
                                    </li>
                                    <li><a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-sign-out"></i>Logout</a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                @else
                                    <li><a href="/login"><i class="fa fa-lock"></i>Sign In</a>
                                    </li>
                                    <li><a href="/register"><i class="fa fa-user"></i>Sign Up</a>
                                    </li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Top Bar -->

            <!-- Header Header -->
            <div class="header-header bg-white">
                <div class="container">
                    <div class="row row-rl-0 row-tb-20 row-md-cell">
                        <div class="brand col-md-3 t-xs-center t-md-left valign-middle">
                            <a href="#" class="logo">
                                <img src="/images/logo.png" alt="" width="250">
                            </a>
                        </div>
                        <div class="header-search col-md-9">
                            <div class="row row-tb-10 ">
                                <div class="col-sm-8">
                                    <form class="search-form">
                                        <div class="input-group">
                                            <input type="text" class="form-control input-lg search-input" placeholder="Enter Keywork Here ..." required="required">
                                            <div class="input-group-btn">
                                                <div class="input-group">
                                                    <select class="form-control input-lg search-select">
                                                        <option>Select Your Category</option>
                                                        <option>Deals</option>
                                                        <option>Coupons</option>
                                                    </select>
                                                    <div class="input-group-btn">
                                                        <button type="submit" class="btn btn-lg btn-search btn-block">
                                                            <i class="fa fa-search font-16"></i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <div class="col-sm-4 t-xs-center t-md-right">
                                    <div class="header-cart">
                                        <a href="cart.html">
                                            <span class="icon fa fa-credit-card"></span>
                                            <div><span class="cart-number">
                                             @auth
                                               {{ auth()->user()->tokens }}
                                             @else
                                                0
                                             @endauth 
                                             </span>
                                            </div>
                                            <span class="title">Tokens</span>
                                        </a>
                                    </div>
                                  
                                </div>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Header Header -->

            <!-- Header Menu -->
            <div class="header-menu bg-blue">
                <div class="container">
                    <nav class="nav-bar">
                        <div class="nav-header">
                            <span class="nav-toggle" data-toggle="#header-navbar">
		                        <i></i>
		                        <i></i>
		                        <i></i>
		                    </span>
                        </div>
                        <div id="header-navbar" class="nav-collapse">
                            <ul class="nav-menu">
                                <li class="{{ request()->is('/') ? 'active' : '' }}">
                                    <a href="/">Home</a>
                                </li>
                                <li class="{{ request()->is('deals*') ? 'active' : '' }}">
                                    <a href="/deals">Deals &amp; Coupons</a>
                                   
                                </li>
                                
                                <li class="{{ request()->is('stores*') ? 'active' : '' }}">
                                    <a href="/stores">Stores</a>
                                    
                                </li>
                                <li class="{{ request()->is('contact*') ? 'active' : '' }}>
                                    <a href="/contact">Contact Us</a>
                                    
                                </li>
                                
                            </ul>
                        </div>
                        <div class="nav-menu nav-menu-fixed">
                            <a href="http://www.stallionstudios.in" target="_blank">Stallion Studios<i class="fa fa-long-arrow-right ml-10"></i></a>
                        </div>
                    </nav>
                </div>
            </div>
            <!-- End Header Menu -->

        </header>
        <!-- –––––––––––––––[ HEADER ]––––––––––––––– -->



        <!-- –––––––––––––––[ PAGE CONTENT ]––––––––––––––– -->
        <main id="mainContent" class="main-content">



          @yield('content')



           </main>
        <!-- –––––––––––––––[ END PAGE CONTENT ]––––––––––––––– -->
        <section class="footer-top-area pt-70 pb-30 pos-r bg-blue">
            <div class="container">
                <div class="row row-tb-20">
                    <div class="col-sm-12 col-md-7">
                        <div class="row row-tb-20">
                            <div class="footer-col col-sm-6">
                                <div class="footer-about">
                                    <img class="mb-40" src="/images/logo.png" width="250" alt="">
                                    <p class="color-light">Hello we are CouponThrills. We are here to provide you the best offers through our coupons.</p>
                                </div>
                            </div>
                            <div class="footer-col col-sm-6">
                                <div class="footer-top-twitter">
                                    <h2 class="color-lighter">Contact Details</h2>
                                    <ul class="twitter-list">
                                        <li class="single-twitter">
                                            <p class="color-light"><i class="ico fa fa-map-marker"></i> India</p>
                                        </li>

                                         <li class="single-twitter">
                                            <p class="color-light"><i class="ico fa fa-envelope"></i> couponthrills@gmail.com</p>
                                        </li>

                                        <li class="single-twitter">
                                            <p class="color-light"><i class="ico fa fa-globe"></i> http://www.stallionstudios.in</p>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-5">
                        <div class="row row-tb-20">
                            <div class="footer-col col-sm-6">
                                <div class="footer-links">
                                    <h2 class="color-lighter">Quick Links</h2>
                                    <ul>
                                        <li><a href="/deals">Latest Deals</a>
                                        </li>
                                        <li><a href="/stores">Store Coupons</a>
                                        </li>
                                        <li><a href="/contact">Contact Us</a>
                                        </li>
                                        <li><a href="/404">Error 404</a>
                                        </li>
                                        <li><a href="/terms">Terms of Use</a>
                                        </li>
                                        <li><a href="/privacy">Privacy Policy</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="footer-col col-sm-6">
                                <div class="footer-top-instagram instagram-widget">
                                    <h2>High End Brands</h2>
                                    <div class="row row-tb-5 row-rl-5">

                                     <?php 
                                        $stores = json_decode(file_get_contents("https://www.coupomated.com/apiv3/6c2a-d0b8-bbaf-b9e6/getStores/Y/json"));
                                        ; ?>
                                        @foreach(array_slice($stores, 0, 9) as $store)
                                        <div class="instagram-widget__item col-xs-4">
                                            <img src="{{ $store->STORE_LOGO}}" alt="">
                                        </div>
                                        @endforeach

                                     

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="payment-methods t-center">
                            <span><img src="assets/images/icons/payment/paypal.jpg" alt=""></span>
                            <span><img src="assets/images/icons/payment/visa.jpg" alt=""></span>
                            <span><img src="assets/images/icons/payment/mastercard.jpg" alt=""></span>
                            <span><img src="assets/images/icons/payment/discover.jpg" alt=""></span>
                            <span><img src="assets/images/icons/payment/american.jpg" alt=""></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- –––––––––––––––[ FOOTER ]––––––––––––––– -->
        <footer id="mainFooter" class="main-footer">
            <div class="container">
                <div class="row">
                    <p>Copyright &copy; {{ date('Y') }} . All rights reserved. Powered By <a style="color: green;" href="http://www.trumpetstechnologies.com">Trumpets</a>.</p>
                </div>
            </div>
        </footer>
        <!-- –––––––––––––––[ END FOOTER ]––––––––––––––– -->

    </div>
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- END WRAPPER                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

  
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- BACK TO TOP                               -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <div id="backTop" class="back-top is-hidden-sm-down">
        <i class="fa fa-angle-up" aria-hidden="true"></i>
    </div>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- SCRIPTS                                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->

    <!-- (!) Placed at the end of the document so the pages load faster -->

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Initialize jQuery library                 -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script src="/js/jquery-1.12.3.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Latest compiled and minified Bootstrap    -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="/js/bootstrap.min.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- JavaScript Plugins                        -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- (!) Include all compiled plugins (below), or include individual files as needed -->

    <!-- Modernizer JS -->
    <script src="/js/modernizr-2.6.2.min.js"></script>
    
    <!-- Owl Carousel -->
    <script type="text/javascript" src="/js/owl.carousel.min.js"></script>

    <!-- FlexSlider -->
    <script type="text/javascript" src="/js/jquery.flexslider-min.js"></script>

    <!-- Coutdown -->
    <script type="text/javascript" src="/js/jquery.countdown.js"></script>

    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <!-- Custom Template JavaScript                   -->
    <!-- ––––––––––––––––––––––––––––––––––––––––– -->
    <script type="text/javascript" src="/js/main.js"></script>

    @yield('js')
</body>

</html>