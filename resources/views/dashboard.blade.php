@extends('layout.app')	

@auth
@include('layout.dashboard-header')	
@endauth
	    
	@section('content')
	@guest
	@include('layout.header')
	@endguest
	<div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
   
@if (Auth::user()->role=='1')
<main id="main col">
	<div class="row g-4 mb-4">
		<div class="col-6 col-lg-3">
			<div class="app-card app-card-stat shadow-sm h-100">
				<div class="app-card-body p-3 p-lg-4">
					<h4 class="stats-type mb-1"> Number of Registered users</h4>
					<div class="stats-figure">{{ $user_count}}</div>
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
					<div class="stats-figure">{{ $properties_count }}</div>
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
					<div class="stats-figure">{{ $agents_count }}</div>
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
					<div class="stats-figure">{{ $sold_properties }}</div>
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
					<div class="stats-figure">{{ $properties_on_sale }}</div>
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
					<div class="stats-figure">{{ $properties_on_rent }}</div>
					<div class="stats-meta text-success"><i class="fa-solid fa-money-bill"></i></div>
				</div><!--//app-card-body-->
				<a class="app-card-link-mask" href="#"></a>
			</div><!--//app-card-->
		</div><!--//col-->
</div>
</main>

@else
<main id="main col">
   
	<!-- ======= Intro Single ======= -->
	<section class="intro-single">
	  <div class="container">
		<div class="row">
		  <div class="col-md-12 col-lg-8">
			<div class="title-single-box">
			  <h1 class="title-single">Our Amazing Properties</h1>
			  <span class="color-text-a">Grid Properties</span>
			</div>
		  </div>
		  <div class="col-md-12 col-lg-4">
			<nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
			  <ol class="breadcrumb">
				<li class="breadcrumb-item">
				  <a href="#">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">
				  Properties Grid
				</li>
			  </ol>
			</nav>
		  </div>
		</div>
	  </div>
	</section><!-- End Intro Single-->
  
	<!-- ======= Property Grid ======= -->
	<section class="property-grid grid">
	  <div class="container">
		<div class="row">
		  <div class="col-sm-12">
			<div class="grid-option mb-5">
			  <form method="post" action="{{ route('building-grid.display') }}">
				@csrf
				<input type="text" placeholder="value" name="item" value="{{ old('item') }}">
				<select class="custom-select" name="option">
				  <option selected>Select an option</option>
				  <option value="By Agent">BY Agent</option>
				  <option value="By Price">By Price</option>
				  <option value="By Keywords">By Keywords</option>
				</select>
				<button type="submit" class="btn btn-success">SEARCH</button>
			  </form>
			</div>
		  </div>
		 @forelse ( $buildings as $building)
		 <div class="col-md-4">
		   <div class="card-box-a card-shadow">
			 <div class="img-box-a">
			   <img src="{{ asset('images/'.$building->images[0]) }}" alt="" class="img-a img-fluid">
			 </div>
			 <div class="card-overlay">
			   <div class="card-overlay-a-content">
				 <div class="card-header-a">
				   <h2 class="card-title-a">
					 <a href="#">{{ $building->address }}
					   <br /> {{ $building->city }}</a>
				   </h2>
				 </div>
				 <div class="card-body-a">
				   <div class="price-box d-flex">
					 <span class="price-a">price | {{ $building->price }}</span>
				   </div>
				   <div class="font-weight-bold text-white">
				   Status: {{ $building->status }}
				   </div>
				   <a href="buildings/info/{{ $building->id}}" class="link-a">Click here to view
					 <span class="bi bi-chevron-right"></span>
				   </a>
				 </div>
				 <div class="card-footer-a">
				   <ul class="card-info d-flex justify-content-around">
					 <li>
					   <h4 class="card-info-title">rooms</h4>
					   &nbsp;<span>{{ $building->rooms }}</span>
					 </li>
					 <li>
					   <h4 class="card-info-title">Garages</h4>
					   <span>{{ $building->garage }}</span>
					 </li>
				   </ul>
				 </div>
			   </div>
			 </div>
		   </div>
		 </div>
		   
		   
		 @empty
  
		 
		   
		 @endforelse
		 
		 
		</div>
	  </div>
	</section><!-- End Property Grid Single-->
  
  </main><!-- End #main -->
  
  @if (!is_array($buildings))
	
  <p class="paginate ml-5">{{ $buildings->links('pagination::bootstrap-4') }}</p>
		   </div>
	   </div>
   </div>

	
@endif
   @endif
   @guest
	@include('layout.footer')
   @endguest
   @auth
   <footer class="app-footer">
	<div class="container text-center py-3">
		 <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
	<small class="copyright">Designed with <span class="sr-only">love</span><i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
	   
	</div>
</footer><!--//app-footer-->
   @endauth
	@endsection
			   
						    
				    
	    
	    
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="{{ asset('assets/dashboard-design/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/dashboard-design/plugins/bootstrap/js/bootstrap.min.js') }}"></script>  

    <!-- Charts JS -->
    <script src="{{ asset('assets/dashboard-design/plugins/chart.js/chart.min.js') }}"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="{{ asset('assets/dashboard-design/js/app.js') }}"></script> 

</body>
</html> 

