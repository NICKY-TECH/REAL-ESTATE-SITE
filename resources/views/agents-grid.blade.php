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

  <main id="main">
    <!-- =======Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Our Amazing Agents</h1>
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
                  Agents Grid
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Agents Grid ======= -->
    <section class="agents-grid grid">
      <div class="container">
        <div class="row">
         @foreach ($agents as $agent)
         <div class="col-md-4">
          <div class="card-box-d">
            <div class="card-img-d">
              <img src="{{ asset('images/'.$agent->image) }}" width="100%"  alt="" class="img-d img-fluid">
            </div>
            <div class="card-overlay card-overlay-hover">
              <div class="card-header-d">
                <div class="card-title-d align-self-center">
                  <h3 class="title-d">
                    <a href="{{ route('details.show', $agent->id) }}" class="link-two">{{ $agent->agent_name }}</a>
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
                    <strong>Email: </strong>{{ $agent->email }}
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
           
         @endforeach
        </div>
    </section><!-- End Agents Grid-->

  </main><!-- End #main -->
     @auth
    </div>
  </div>
</div>
     @endauth


@auth
  @include('layout.dashboard-footer')
@endauth
@guest
@include('layout.footer') 
@endguest
 @endsection