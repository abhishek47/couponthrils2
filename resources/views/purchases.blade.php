@extends('layouts.master')

@section('content')
 <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                   
                       

                            

                             <section class="store-header-area panel t-xs-center t-sm-left mb-30 mt-20">
                        <div class="row row-rl-10">
                            
                            <div class="col-sm-5 col-md-6">
                                <div class="store-about ptb-30">
                                    <h3 class="ml-30">Purchased Coupons</h3>
                                 </div>   
                            </div>
                            
                        </div>
                    </section>

                              <!-- Coupons Area -->
                    <section class="section coupons-area coupons-area-grid mt-20">

                       
                        <!-- End Page Control -->
                        <div class="row row-masnory row-tb-20">
                          @foreach($coupons as $couponItem)
                            <?php $coupon = $couponItem->coupon; ?>
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
                                                    <p class="mb-15 color-muted mb-20 font-12">
                                                      <i class="fa fa-calendar mr-10"></i>Expires On {{ $coupon->VALIDITY_DATE }}
                                                    </p>
                                                   
                                                    <div class="showcode coupon-showen"  data-toggle-class="coupon-showen" 
                                                       data-toggle-event="click">
                                                        <button class="show-code btn btn-sm btn-block" 
                                                          data-toggle="modal" data-target="#coupon_{{$coupon->CM_CID}}">
                                                          Show Coupon Code
                                                        </button>
                                                        <div class="coupon-hide">
                                                            <a target="_blank" href="{{ $coupon->LINK }}">{{ $coupon->COUPON != '' ? $coupon->COUPON : 'USE OFFER'  }}</a> 
                                                        </div>
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


                    
                </div>
            </div>
            <!-- End Page Container -->

@endsection
