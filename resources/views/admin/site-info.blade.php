@extends('layout.app')

@auth
  @include('layout.dashboard-header')
@endauth

 @section('content')
@guest
@include('layout.header')
@endguest

  @auth
  <div class="app-wrapper">
	    
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
 
  @endauth
        <main id="main col">
            <div class="row g-4 mb-4">
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1"> Number of Registered users</h4>
                            <div class="stats-figure">$12,628</div>
                            <div class="stats-meta text-success">
                                <i class="fa-solid fa-user font-s"></i>
                                </div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Number of Properties</h4>
                            <div class="stats-figure">$2,250</div>
                            <div class="stats-meta text-success">
                                <i class="fa-solid fa-house"></i> </div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Number of Agents</h4>
                            <div class="stats-figure">23</div>
                            <div class="stats-meta text-success">
                                <i class="fa-solid fa-users"></i></div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Number of sold properties</h4>
                            <div class="stats-figure">6</div>
                            <div class="stats-meta text-success"><i class="fa-solid fa-money-bill"></i></div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Number of rented properties</h4>
                            <div class="stats-figure">6</div>
                            <div class="stats-meta text-success"><i class="fa-solid fa-money-bill"></i></div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Number of offline users</h4>
                            <div class="stats-figure">6</div>
                            <div class="stats-meta text-success"><i class="fa-solid fa-user font-s"></i></div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Number of properties for sale</h4>
                            <div class="stats-figure">6</div>
                            <div class="stats-meta text-success"><i class="fa-solid fa-money-bill"></i></div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Number of online users</h4>
                            <div class="stats-figure">6</div>
                            <div class="stats-meta text-success"><i class="fa-solid fa-user font-s"></i></div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
                <div class="col-6 col-lg-3">
                    <div class="app-card app-card-stat shadow-sm h-100">
                        <div class="app-card-body p-3 p-lg-4">
                            <h4 class="stats-type mb-1">Number of properties for rent</h4>
                            <div class="stats-figure">6</div>
                            <div class="stats-meta text-success"><i class="fa-solid fa-money-bill"></i></div>
                        </div><!--//app-card-body-->
                        <a class="app-card-link-mask" href="#"></a>
                    </div><!--//app-card-->
                </div><!--//col-->
            </div>
        </main>
    </div>
  </div>
   
@include('layout.dashboard-footer')    
@endsection

