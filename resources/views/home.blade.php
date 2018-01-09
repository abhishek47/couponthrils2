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
