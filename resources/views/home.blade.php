@extends('layout.app')

@include('layout.header')

@section('content')
@extends('layout.app')


 
 @section('content')
 @include('layout.header')

 <main id="main">

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
            <form method="post" action="{{ route('property-grid.store') }}">
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

       <h1 class="text-center">Invalid search</h1>
         
       @endforelse
       
       
      </div>
    </div>
  </section><!-- End Property Grid Single-->

</main><!-- End #main -->
@if (!is_array($buildings))
  
<p class="paginate ml-5">{{ $buildings->links('pagination::bootstrap-4') }}</p>
@endif
@include('layout.footer')
 @endsection


@endsection
