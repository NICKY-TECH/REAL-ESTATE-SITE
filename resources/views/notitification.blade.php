@include('layout.dashboard-header')
<div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <div class="position-relative mb-3">
				    <div class="row g-3 justify-content-between">
					    <div class="col-auto">
					        <h1 class="app-page-title mb-0">Notifications</h1>
					    </div>
				    </div>
			    </div>
			    @forelse ($latest_property_info as $property)
				<div class="app-card app-card-notification shadow-sm mb-4 mt-5">
				    <div class="app-card-header px-4 py-3">
				        <div class="row g-3 align-items-center">
					        <div class="col-12 col-lg-auto text-center text-lg-start">						        
				                <img class="profile-image" src="{{ asset('/images/'.$property->images[0]) }}" alt="">
					        </div><!--//col-->
					        <div class="col-12 col-lg-auto text-center text-lg-start">
						        <div class="notification-type mb-2"><span class="badge bg-info">Property</span></div>
						        <h4 class="notification-title mb-1"></h4>
						        
						        <ul class="notification-meta list-inline mb-0">
							        <li class="list-inline-item">{{ $property->created_at->diffForHumans() }}</li>
							        <li class="list-inline-item">|</li>
							        <li class="list-inline-item">{{ $property->agent->agent_name }}</li>
						        </ul>
						   
					        </div><!--//col-->
				        </div><!--//row-->
				    </div><!--//app-card-header-->
				    <div class="app-card-body p-4">
					    <div class="notification-content">{{ $property->description }}</div>
				    </div><!--//app-card-body-->
				    <div class="app-card-footer px-4 py-3">
					    <a class="action-link" href="{{ route('info.show',$property->id) }}">View all<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right ms-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
</svg></a>
				    </div><!--//app-card-footer-->
					
				
				</div><!--//app-card-->
				@empty
					
				@endforelse
			    
		    </div><!--//container-fluid-->
			
	    </div><!--//app-content-->
		
		<p class="paginate ml-5">{{ $latest_property_info->links('pagination::bootstrap-4') }}</p>
	  @include('layout.dashboard-footer')