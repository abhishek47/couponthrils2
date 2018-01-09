@extends('layouts.master')



@section('content')

<div class="page-container ptb-60">
                <div class="container">

                    <!-- Coupons Area -->
                    <div class="section coupons-area coupons-area-grid">

                        <!-- Page Control -->
                        <header class="page-control panel ptb-15 prl-20 pos-r mb-30">

                           

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
                                <div  class="coupon-single panel t-center">
                                    
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
                                                <img class="store-logo" src="{{$logo_path}}" alt="">
                                            </div>
                                            <!-- end media -->
                                        </div>
                                        <!-- end col -->

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

                               </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- Page Pagination -->
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            <nav>
                                <!-- Page Pagination -->
                                <ul class="page-pagination">
                                    <li><a class="page-numbers previous" href="{{ '/deals?page=' . ($page-1) }}">Previous</a>
                                    </li>

                                    @for($i = 1; $i <= $pages; $i++)
                                        @if($i == 11)
                                         <li><span class="page-numbers dots">.....</span></li> 
                                        @endif
                                        @if($i > 10 && $i < $pages-7)

                                        @else
                                        
                                        <li><a href="{{ '/deals?page=' . $i }}" class="page-numbers {{ $page == $i ? 'current': '' }}">{{ $i }}</a>
                                        </li>
                                        @endif
                                    @endfor
                                   
                                    <li><a href="{{ '/deals?page=' . ($page+1) }}" class="page-numbers next">Next</a>
                                    </li>
                                </ul>
                                <!-- End Page Pagination -->
                            </nav>
                        </div>
                        <!-- End Page Pagination -->
                    </div>
                    <!-- End Coupons Area -->

                </div>
            </div>

 @if(request()->session()->has('coupon_redeemed'))
                <?php $coupon = session('coupon_redeemed'); ?>
                <div class="modal fade get-coupon-area" id="redeem" tabindex="-1" role="dialog" >
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
                                                      @if($coupon->COUPON != '')
                                                        <h6 class="color-mid t-uppercase">Get this Offer by using the coupon code below</h6>
                                                        <a href="#" target="_blank" class="coupon-code">{{ $coupon->COUPON }}</a>
                                                      @else
                                                        <h6 class="color-mid t-uppercase">Click below to use your offer</h6>
                                                        <a href="{{ $coupon->LINK }}" target="_blank" class="coupon-code">USE OFFER</a>
                                                      @endif  
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
                    <button class="btn" type="submit">Subscribe</button>
                </span>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                   @endif

            @foreach($coupons as $coupon)


             <!-- Modal -->
            <div class="modal fade get-coupon-area" id="coupon_{{$coupon->CM_CID}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
                                                            <?php preg_match_all('!\d+!', $coupon->DISCOUNT, $matches);
                
                                                            $tokens = 5; 
                                                            
                                                            if(isset($matches[0][0])) { 
                                                            if($matches[0][0] <= 20) { $tokens = 100; }

                                                            if($matches[0][0] < 50 && $matches[0][0] > 20) { $tokens = 150; }

                                                            if($matches[0][0] >= 50) { $tokens = 200; } 
                                                            }  ?>
                                                        <h6 class="color-mid t-uppercase">Click below to redeem tokens and get coupon</h6>
                                                        <a href="#"
                                            onclick="event.preventDefault();
                                                     document.getElementById('redeem-form-{{$coupon->CM_CID}}').submit();"  class="coupon-code">USE {{$tokens}} TOKENS</a>

                                                         <form id="redeem-form-{{$coupon->CM_CID}}" action="/coupons/redeem" 
                                                            method="POST" style="display: none;">
                                                            {{ csrf_field() }}
                                                            <input type="hidden" name="coupon" value="{{ json_encode($coupon) }}">
                                                        </form> 
                                                     
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                          
                                        </div>
                                    </div>
            </div>

            
            @endforeach


@endsection


@section('js')

    @if(request()->session()->has('coupon_redeemed'))
     <script type="text/javascript">
        $('#redeem').modal()
     </script>
    @endif 



@endsection