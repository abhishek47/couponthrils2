@extends('layouts.master')



@section('content')

	 <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                   <section class="store-header-area panel t-xs-center t-sm-left mb-30">
                        <div class="row row-rl-10">
                            <div class="col-sm-3 col-md-2 t-center">
                                <figure class="pt-20 pl-10">
                                    <img src="{{ $storeLogo }}" alt="">
                                </figure>
                            </div>
                            <div class="col-sm-5 col-md-6">
                                <div class="store-about ptb-30">
                                    <h3 class="mb-10">{{ $storeName }}</h3>
                                    <div class="rating mb-10">
                                        <span class="rating-stars rate-allow" data-rating="3">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o star-active"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </span>
                                        <span class="rating-reviews">
                                ( <span class="rating-count">{{ count($coupons) }}</span> offers )
                                        </span>
                                    </div>
                                    <p class="mb-15">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio officiis at accusantium ducimus excepturi cumque ad commodi libero nihil rem voluptatibus veniam ipsa ullam esse quia quae fuga, quidem iusto.</p>
                                    <p class="mb-20">Sunt ea hic nam dicta odit quam obcaecati et accusamus exercitationem fuga earum incidunt tempore iure aperiam?</p>
                                </div>
                            </div>
                            
                        </div>
                    </section>










                    <!-- Coupons Area -->
                    <section class="section coupons-area coupons-area-grid">

                        <!-- Page Control -->
                        <header class="page-control panel ptb-15 prl-20 pos-r mb-30">

                            <!-- List Control View -->
                            <ul class="list-control-view list-inline">
                                <li><a href="coupons_list.html"><i class="fa fa-bars"></i></a>
                                </li>
                                <li><a href="coupons_grid.html"><i class="fa fa-th"></i></a>
                                </li>
                            </ul>
                            <!-- End List Control View -->

                            <div class="right-10 pos-tb-center">
                                <select class="form-control input-sm">
                                    <option>SORT BY</option>
                                    <option>Newest items</option>
                                    <option>Best sellers</option>
                                    <option>Best rated</option>
                                    <option>Price: low to high</option>
                                    <option>Price: high to low</option>
                                </select>
                            </div>
                        </header>
                        <!-- End Page Control -->
                        <div class="row row-masnory row-tb-20">
                          @foreach($coupons as $coupon)
                            <div class="col-sm-6 col-md-4 col-lg-3">
                                <div class="coupon-single panel t-center">
                                    
                                    <div class="row">
                                        

                                        <div class="col-xs-12">
                                            <div class="panel-body">
                                                <ul class="deal-meta list-inline mb-10">
                                                    <li class="color-green"><i class="ico fa fa-check mr-5"></i>Verifed</li>
                                                </ul>

                                                    <?php preg_match_all('!\d+!', $coupon->DISCOUNT, $matches);
                
                                                            $tokens = 5; 
                                                            
                                                            if(isset($matches[0][0])) { 
                                                            if($matches[0][0] <= 20) { $tokens = 100; }

                                                            if($matches[0][0] < 50 && $matches[0][0] > 20) { $tokens = 150; }

                                                            if($matches[0][0] >= 50) { $tokens = 200; } 
                                                            }  ?>
                                               <h4 class="mb-10 t-uppercase" style="color: #d84523;font-weight: bold;">{{ $tokens }} tokens</h4>
                                                 
                                                <h5 class="deal-title mb-10">
                                        <a href="#">{{ $coupon->TITLE }}</a>
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
                            </div>
                                @endforeach
                            </div>
                        </section>


                </div>



                
            </div>
            <!-- End Page Container -->



@endsection