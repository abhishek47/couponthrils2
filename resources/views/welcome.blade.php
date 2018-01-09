@extends('layouts.master')



@section('content')


 <div class="page-container ptb-10">
                <div class="container">
                    <div class="section deals-header-area ptb-30">
                        <div class="row row-tb-20">
                            <div class="col-xs-12 col-md-5 col-lg-4">
                                <aside>
                                    <ul class="nav-coupon-category panel">
                                    	@foreach(array_slice($categories, 0, 9) as $category)
	                                        <li><a href="{{ route('categories', ['categoryId' => $category->CAT_ID, 'category_name' => $category->CAT_NAME ]) }}"><i class="fa fa-list"></i>{{ $category->CAT_NAME }}<span>40</span></a>
	                                        </li>
                                        @endforeach
                                        
                                        <li class="all-cat">
                                            <a class="font-14" href="#">All Categories</a>
                                        </li>
                                    </ul>
                                </aside>
                            </div>
                            <div class="col-xs-12 col-md-7 col-lg-8">
                                <div class="header-deals-slider owl-slider" data-loop="true" data-autoplay="true" data-autoplay-timeout="10000" data-smart-speed="1000" data-nav-speed="false" data-nav="true" data-xxs-items="1" data-xxs-nav="true" data-xs-items="1" data-xs-nav="true" data-sm-items="1" data-sm-nav="true" data-md-items="1" data-md-nav="true" data-lg-items="1" data-lg-nav="true">

                                @foreach($banners as $banner)
                                    <div class="deal-single panel item">
                                        <figure class="deal-thumbnail embed-responsive embed-responsive-16by9" data-bg-img="/images/banner.jpg">
                                            <?php preg_match_all('!\d+!', $banner->DISCOUNT, $matches); ?>
                                            <div class="label-discount top-10 right-10">-{{ $matches[0][0]?:20}}%</div>
                                            <ul class="deal-actions top-10 left-10">
                                                <li class="like-deal">
				                                <span>
							                        <i class="fa fa-heart"></i>
							                    </span>
                                                </li>
                                                <li class="share-btn">
                                                    <div class="share-tooltip fade">
                                                        <a target="_blank" href="#"><i class="fa fa-facebook"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-twitter"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-google-plus"></i></a>
                                                        <a target="_blank" href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                    <span><i class="fa fa-share-alt"></i></span>
                                                </li>
                                                <li>
				                                <span>
							                        <i class="fa fa-camera"></i>
							                    </span>
                                                </li>
                                            </ul>
                                            <div class="deal-about p-20 pos-a bottom-0 left-0">
                                                <div class="rating mb-10">
                                                    <span class="rating-stars" data-rating="3">
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o star-active"></i>
								                        <i class="fa fa-star-o"></i>
								                        <i class="fa fa-star-o"></i>
								                    </span>
                                                    <span class="rating-reviews color-light">
			                    						( <span class="rating-count">241</span> Reviews )
                                                    </span>
                                                </div>
                                                <h3 class="deal-title mb-10 ">
								                    <a href="{{ $banner->LINK }}" class="color-light color-h-lighter">{{ $banner->TITLE }}</a>
								                </h3>
                                            </div>
                                        </figure>
                                    </div>
                                 @endforeach   
                                 

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section explain-process-area ptb-30">
                        <div class="row row-rl-10">
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="/images/tablet.png" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Deals & Coupons</h5>
                                            <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="/images/online-shop-6.png" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Find Best Offers</h5>
                                            <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="item panel prl-15 ptb-20">
                                    <div class="row row-rl-5 row-xs-cell">
                                        <div class="col-xs-4 valign-middle">
                                            <img class="pr-10" src="/images/money.png" alt="">
                                        </div>
                                        <div class="col-xs-8">
                                            <h5 class="mb-10 pt-5">Save Money</h5>
                                            <p class="color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure aspernatur.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                      <section class="section stores-area stores-area-v1 ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Popular Stores</h3>
                            <a href="/stores" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">All Stores</a>
                        </header>
                        <div class="popular-stores-slider owl-slider" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="20" data-items="2" data-xxs-items="2" data-xs-items="2" data-sm-items="3" data-md-items="5" data-lg-items="6">

                         @foreach($stores as $store)
                            <div class="store-item t-center">
                                <a href="/stores/{{$store->STORE_ID}}" class="panel is-block">
                                    <div class="embed-responsive embed-responsive-4by3">
                                        <div class="store-logo">
                                            <img src="{{ $store->STORE_LOGOV2 }}" alt="">
                                        </div>
                                    </div>
                                    <h6 class="store-name ptb-10">{{ $store->STORE_NAME }}</h6>
                                </a>
                            </div>
                          @endforeach  
                        </div>
                    </section>


                    <section class="section latest-deals-area ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest Deals</h3>
                            <a href="/deals" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                        </header>

                        <div class="row row-masnory row-tb-20">

                          @foreach(array_slice($deals, 0, 6) as $deal)
                            <div class="col-sm-6 col-lg-4">
                                <div class="deal-single panel">
                                    
                                    <div class="bg-white pt-20 pl-20 pr-15">
                                        <div class="pr-md-10">
                                          <div class="img">
                                             <?php $pieces = parse_url($deal->LINK);
							                  $domain = isset($pieces['host']) ? $pieces['host'] : '';
							                  if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
							                    $logo_path = "https://logo.clearbit.com/" . $regs['domain'];
							                    
							                  } else {
							                     $logo_path = '';
							                  } ?>
                                          		<img src="{{ $logo_path }}" style="width: 120px;margin-bottom: 20px;"> 
                                          		
                                          </div>
                                            <div class="rating mb-10">
                                                <span class="rating-stars rate-allow" data-rating="5">
					                                <i class="fa fa-star-o"></i>
					                                <i class="fa fa-star-o"></i>
					                                <i class="fa fa-star-o"></i>
					                                <i class="fa fa-star-o"></i>
					                                <i class="fa fa-star-o"></i>
					                            </span>
                                               
                                            </div>
                                            <h3 class="deal-title mb-10">
                            <a href="{{ $deal->LINK }}">{{ substr($deal->TITLE, 0, 50) }}...</a>
                        </h3>
                                            <ul class="deal-meta list-inline mb-10 color-mid">
                                                <li><i class="ico fa fa-shopping-basket mr-10"></i>{{ substr($deal->CATS_TEXT, 0, 30) }}..</li>
                                            </ul>
                                            <p class="text-muted mb-20">{{ substr($deal->DESCRIPTION, 0, 110) }}..</p>
                                        </div>
                                        <div class="deal-price pos-r mb-15">
                                            <h3 class="price ptb-5 text-right">{{ substr($deal->DISCOUNT, 0, 30) }}..</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           @endforeach
                        </div>
                    </section>


                    <section class="section latest-coupons-area ptb-30">
                        <header class="panel ptb-15 prl-20 pos-r mb-30">
                            <h3 class="section-title font-18">Latest Coupons</h3>
                            <a href="/deals" class="btn btn-o btn-xs pos-a right-10 pos-tb-center">View All</a>
                        </header>

                        <div class="latest-coupons-slider owl-slider" data-autoplay-hover-pause="true" data-loop="true" data-autoplay="true" data-smart-speed="1000" data-autoplay-timeout="10000" data-margin="30" data-nav-speed="false" data-items="1" data-xxs-items="1" data-xs-items="2" data-sm-items="2" data-md-items="3" data-lg-items="4">

                          @foreach($coupons as $coupon) 
                            <div class="coupon-item">
                                <div class="coupon-single panel t-center">
                                    
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="text-center p-20">
                                            	<?php $pieces = parse_url($coupon->LINK);
							                  $domain = isset($pieces['host']) ? $pieces['host'] : '';
							                  if (preg_match('/(?P<domain>[a-z0-9][a-z0-9\-]{1,63}\.[a-z\.]{2,6})$/i', $domain, $regs)) {
							                    $logo_path = "https://logo.clearbit.com/" . $regs['domain'];
							                    
							                  } else {
							                     $logo_path = '';
							                  } ?>
                                                <img style="width: 120px;margin:0 auto;" class="store-logo" src="{{ $logo_path }}" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico fa fa-check mr-5"></i>Verifed</li>
                                                </ul>
                                               
                                                <h5 class="deal-title mb-10">
					                                <a href="#">{{ $coupon->DISCOUNT}}</a>
					                            </h5>
                                                <p class="mb-15 color-muted mb-20 font-12"><i class="fa fa-calendar mr-10"></i>Expires On {{ $coupon->VALIDITY_DATE }}</p>
                                                <div class="showcode">
                                                    <button class="show-code btn btn-sm btn-block" data-toggle="modal" data-target="#coupon_{{$coupon->CM_CID}}">Get Coupon Code</button>
                                                    <div class="coupon-hide">{{ $coupon->COUPON }}</div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- end col -->
                                    </div>
                                    <!-- end row -->
                                </div>
                                
                            </div>
                           @endforeach 	
                        </div>
                    </section>
                  


                   


                    <section class="section subscribe-area ptb-40 t-center">
                        <div class="newsletter-form">
                            <h4 class="mb-20"><i class="fa fa-envelope-o color-green mr-10"></i>Sign up for our weekly email newsletter</h4>
                            <p class="mb-20 color-mid">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi animi magni accusantium architecto possimus.</p>
                            <form method="post" action="#">
                                <div class="input-group mb-10">
                                    <input type="email" class="form-control bg-white" placeholder="Email Address" required="required">
                                    <span class="input-group-btn">
                                        <button class="btn" type="submit">Subscribe</button>
                                    </span>
                                </div>
                            </form>
                            <p class="color-muted"><small>We’ll never share your email address with a third-party.</small> </p>
                        </div>
                    </section>
                </div>
            </div>



            @foreach($coupons as $coupon)

            	<div class="modal fade get-coupon-area" tabindex="-1" role="dialog" id="coupon_{{$coupon->CM_CID}}">
                                    <div class="modal-dialog">
                                        <div class="modal-content panel">
                                            <div class="modal-body">
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                                <div class="row row-v-10">
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <img src="assets/images/brands/store_logo.jpg" alt="">
                                                        <h3 class="mb-20">{{ $coupon->TITLE }}</h3>
                                                        <p class="color-mid">{{ $coupon->DESCRIPTION }}</p>
                                                    </div>
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <a href="{{ $coupon->LINK }}" class="btn btn-link">Visit Our Store</a>
                                                    </div>
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <h6 class="color-mid t-uppercase">Click below to get your coupon code</h6>
                                                        <a href="#" target="_blank" class="coupon-code">{{ $coupon->COUPON }}</a>
                                                    </div>
                                                    <div class="col-md-10 col-md-offset-1">
                                                        <div class="like-report mb-10">
                                                            <span>Share this coupon :</span>
                                                            <ul class="list-inline social-icons social-icons--colored mt-10">
                                                                <li class="social-icons__item">
                                                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                                                </li>
                                                                <li class="social-icons__item">
                                                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                                                </li>
                                                                <li class="social-icons__item">
                                                                    <a href="#"><i class="fa fa-google-plus"></i></a>
                                                                </li>
                                                                <li class="social-icons__item">
                                                                    <a href="#"><i class="fa fa-linkedin"></i></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer footer-info t-center ptb-40 prl-30">
                                                <h4 class="mb-15">Subscribe to Mail</h4>
                                                <p class="color-mid mb-20">Get our Daily email newsletter with Special Services, Updates, Offers and more!</p>
                                                <form method="post" action="#">
                                                    <div class="input-group">
                                                        <input type="text" class="form-control bg-white" placeholder="Your Email Address" required="required">
                                                        <span class="input-group-btn">
                    <button class="btn" type="submit">Sign Up</button>
                </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

            @endforeach


@endsection