@extends('layout.app')

@section('content')

@include('layout.header')
  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  
  <!-- ======= Intro Section ======= -->
  <div class="intro intro-carousel swiper position-relative">

    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4 ">
                      YOUR
                      <span class="color-b">DREAM HOME</span> IS JUST A CLICK AWAY
                      <br> Olive Road Two
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <span class="price-a">get a house for as low as | 1.5m</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4 ">
                      YOUR
                      <span class="color-b">DREAM HOME</span> IS JUST A CLICK AWAY
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <span class="price-a">get a house for as low as | 1.5m</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url(assets/img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <h1 class="intro-title mb-4 ">
                      YOUR
                      <span class="color-b">DREAM HOME</span> IS JUST A CLICK AWAY
                    </h1>
                    <p class="intro-subtitle intro-price">
                      <span class="price-a">get a house for as low as | 1.5m</span>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div><!-- End Intro Section -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Our Services</h2>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-cart"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Lifestyle</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-calendar4-week"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Loans</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Nulla porttitor accumsan tincidunt. Curabitur aliquet quam id dui posuere blandit. Mauris blandit
                  aliquet elit, eget tincidunt
                  nibh pulvinar a.
                </p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card-box-c foo">
              <div class="card-header-c d-flex">
                <div class="card-box-ico">
                  <span class="bi bi-card-checklist"></span>
                </div>
                <div class="card-title-c align-self-center">
                  <h2 class="title-c">Sell</h2>
                </div>
              </div>
              <div class="card-body-c">
                <p class="content-c">
                  Sed porttitor lectus nibh. Cras ultricies ligula sed magna dictum porta. Praesent sapien massa,
                  convallis a pellentesque
                  nec, egestas non nisi.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Services Section -->

    <!-- ======= Latest Properties Section ======= -->
    <section class="section-property section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Latest Properties</h2>
              </div>
              <div class="title-link">
                {{-- <a href="{{ route('property-grid.index') }}">All Property
                  <span class="bi bi-chevron-right"></span>
                </a> --}}
              </div>
            </div>
          </div>
        </div>

        <div id="property-carousel" class="swiper">
          <div class="swiper-wrapper">

            @foreach ($buildings as $building)

            <div class="carousel-item-b swiper-slide">
              <div class="card-box-a card-shadow">
                <div class="img-box-a">
                  <img src="{{ asset('images/'.$building->images[0]) }}" alt="" class="img-a img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-overlay-a-content">
                    <div class="card-header-a">
                      <h2 class="card-title-a">
                        <a href="property-single.html">{{$building->address}}
                          <br /> {{ $building->city }}</a>
                      </h2>
                    </div>
                    <div class="card-body-a">
                      <div class="price-box d-flex">
                        <span class="price-a">price | {{ $building->price }}</span>
                      </div>
                    </div>
                    <div class="card-footer-a">
                      <ul class="card-info d-flex justify-content-around">
                        <li>
                          <h4 class="card-info-title">rooms</h4>
                          <span>{{ $building->rooms }}</span>
                        </li>
                        <li>
                          <h4 class="card-info-title">Baths</h4>
                          <span>4</span>
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
              
            @endforeach
            <!-- End carousel item -->
          </div>
        </div>
        <div class="propery-carousel-pagination carousel-pagination"></div>

      </div>
    </section><!-- End Latest Properties Section -->

    <!-- ======= Agents Section ======= -->
    <section class="section-agents section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Agents</h2>
              </div>
              <div class="title-link">
                <a href="{{ route('agents.display') }}">All Agents
                  <span class="bi bi-chevron-right"></span>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
@forelse ($agents as $agent)
        
<div class="col-md-4">
  <div class="card-box-d">
    <div class="card-img-d">
      <img src="{{ asset('images/'.$agent->image) }}" alt="" class="img-d img-fluid">
    </div>
    <div class="card-overlay card-overlay-hover">
      <div class="card-header-d">
        <div class="card-title-d align-self-center">
          <h3 class="title-d">
            <form action="{{ route('details.show', $agent->id) }}" method="POST">
              <button type="submit"> {{ $agent->agent_name }}</button>
            </form>
           
          </h3>
        </div>
      </div>
      <div class="card-body-d">
        <p class="content-d color-text-a">
       {{ $agent->about_agent }}
        </p>
        <div class="info-agents color-a">
          <p>
            <strong>Phone: </strong> {{ $agent->phone_number }}
          </p>
          <p>
            <strong>Email: </strong> {{ $agent->email }}
          </p>
        </div>
      </div>
      <div class="card-footer-d">
        <div class="socials-footer d-flex justify-content-center">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a href="{{ $agent->facebook }}" class="link-one">
                <i class="bi bi-facebook" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="{{ $agent->twitter }}" class="link-one">
                <i class="bi bi-twitter" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="{{ $agent->instagram }}" class="link-one">
                <i class="bi bi-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="{{ $agent->linkedIn }}" class="link-one">
                <i class="bi bi-linkedin" aria-hidden="true"></i>
              </a>
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
    </section><!-- End Agents Section -->

    <!-- ======= Latest News Section ======= -->
    

    <!-- ======= Testimonials Section ======= -->
    <section class="section-testimonials section-t8 nav-arrow-a">
    </section>
  </main><!-- End #main -->

  {{-- @if (!is_array($buildings))
  
  <p class="paginate ml-5">{{ $buildings->links('pagination::bootstrap-4') }}</p> --}}
  @include('layout.footer')
@endsection