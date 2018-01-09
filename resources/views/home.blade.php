@extends('layouts.master')

@section('content')
 <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <div class="row row-rl-10 row-tb-20">
                        <div class="page-content col-xs-12 col-sm-8 col-md-9">

                            <!-- Checkout Area -->
                            <section class="section checkout-area panel prl-30 pt-20 pb-20">
                                <h2 class="h3 mb-20 h-title">Account Information</h2>
                                <form class="mb-30" method="POST" action="/profile">
                                    <div class="row" >
                                        @if($errors->has('name') || $errors->has('email'))
                                        @include('partials.errors')
                                      @endif
                                       {{ csrf_field() }}
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Email</label>
                                                <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}">
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                              <button type="submit" class="btn btn-lg btn-rounded mr-10">Update Details</button>
                                        </div>
                                    </div>
                                </form>
                              
                            </section>
                            <!-- End Checkout Area -->

                            <!-- Checkout Area -->
                            <section class="section checkout-area panel prl-30 pt-20 pb-20 mt-20">
                                <h2 class="h3 mb-20 h-title">Account Security</h2>
                                <form class="mb-30" method="POST" action="/profile/password">
                                    @if($errors->has('old_password') || $errors->has('password'))
                                      @include('partials.errors')
                                     @endif
                                    <div class="row">   
                                         {{ csrf_field() }}
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Old Password</label>
                                                <input type="password" class="form-control" name="old_password">
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>New Password</label>
                                                <input type="password" class="form-control" name="password" >
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Confirm New Password</label>
                                                <input type="password" class="form-control" name="password_confirmation" >
                                            </div>
                                        </div>


                                        <div class="col-md-6">
                                              <button type="submit" class="btn btn-lg btn-rounded mr-10">Update Password</button>
                                        </div>
                                    </div>
                                </form>
                              
                            </section>
                            <!-- End Checkout Area -->

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
                        <div class="page-sidebar col-xs-12 col-sm-4 col-md-3">

                            <!-- Blog Sidebar -->
                            <aside class="sidebar blog-sidebar">
                                <div class="row row-tb-10">
                                    <div class="col-xs-12">
                                        <!-- Recent Posts -->
                                        <div class="widget checkout-widget panel p-20">
                                            <div class="widget-body">
                                                <table class="table mb-15">
                                                    <tbody>
                                                        
                                                        <tr class="font-15">
                                                            <td class="color-mid">My Tokens</td>
                                                            <td class="color-green" style="font-weight: bold;font-size: 20px;">{{ auth()->user()->tokens }}</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <a href="cart.html" class="btn btn-info btn-block btn-sm">Buy Tokens</a>
                                            </div>
                                        </div>
                                        <!-- End Recent Posts -->
                                    </div>
                                </div>
                            </aside>
                            <!-- End Blog Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Container -->

@endsection
