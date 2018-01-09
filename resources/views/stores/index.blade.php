@extends('layouts.master')



@section('content')

	 <!-- Page Container -->
            <div class="page-container ptb-60">
                <div class="container">
                    <section class="stores-area stores-area-v1">
                        <h3 class="mb-40 t-uppercase">View deals by stores</h3>
                        <div class="row row-rl-15 row-tb-15 t-center">

                          @foreach($stores as $store)
                            <div class="col-xs-6 col-sm-4 col-md-3 col-lg-2">
                                <a href="/stores/{{ $store->STORE_ID }}/" class="panel is-block">
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
                        <!-- Page Pagination 
                        <div class="page-pagination text-center mt-30 p-10 panel">
                            <nav>
                                
                                <ul class="page-pagination">
                                    <li><a class="page-numbers previous" href="#">Previous</a>
                                    </li>
                                    <li><a href="#" class="page-numbers">1</a>
                                    </li>
                                    <li><span class="page-numbers current">2</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">3</a>
                                    </li>
                                    <li><a href="#" class="page-numbers">4</a>
                                    </li>
                                    <li><span class="page-numbers dots">...</span>
                                    </li>
                                    <li><a href="#" class="page-numbers">20</a>
                                    </li>
                                    <li><a href="#" class="page-numbers next">Next</a>
                                    </li>
                                </ul>
                               
                            </nav>
                        </div>
                         End Page Pagination -->
                    </section>
                </div>
            </div>
            <!-- End Page Container -->



@endsection