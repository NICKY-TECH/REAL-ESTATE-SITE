@extends('layout.app')

@auth
  @include('layout.dashboard-header')
@endauth

@section('content')
<section class="agent-single">
  @auth
  <div class="app-wrapper">
  
    <div class="app-content pt-3 p-md-3 p-lg-4">
   

  @endauth
  <main id="main">
        @guest
          @include('layout.header')
        @endguest
    
        <!-- ======= Intro Single ======= -->
        <section class="intro-single">
          <div class="container">
            <div class="row">
              <div class="col-md-12 col-lg-8">
                <div class="title-single-box">
                  <h1 class="title-single">{{ $agent->agent_name }}</h1>
                </div>
              </div>
              <div class="col-md-12 col-lg-4">
                <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a href="#">Home</a>
                    </li>
                    <li class="breadcrumb-item">
                      <a href="#">Agents</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">
                    {{$agent->agent_name}}
                    </li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </section><!-- End Intro Single -->
    
        <!-- ======= Agent Single ======= -->
        <section class="agent-single">
          <div class="container">
            <div class="row">
              <div class="col-sm-12">
                <div class="row">
                  <div class="col-md-6">
                    <div class="agent-avatar-box">
                      <img src="{{ asset('images/'.$agent->image) }}" alt="" class="agent-avatar img-fluid">
                    </div>
                  </div>
                  <div class="col-md-5 section-md-t3">
                    <div class="agent-info-box">
                      <div class="agent-title">
                        <div class="title-box-d">
                          <h3 class="title-d">{{ $agent->agent_name }}
                          </h3>
                        </div>
                      </div>
                      <div class="agent-content mb-3">
                        <p class="content-d color-text-a">
                          {{ $agent->about_agent }}
                          </p>
                        <div class="info-agents color-a">
                          <p>
                            <strong>Phone: </strong>
                            <span class="color-text-a"> {{ $agent->phone_number }}</span>
                          </p>
                          <p>
                            <strong>Mobile: </strong>
                            <span class="color-text-a">{{$agent->phone_number}}</span>
                          </p>
                          <p>
                            <strong>Email: </strong>
                            <span class="color-text-a"> {{ $agent->email }}</span>
                          </p>
                        </div>
                      </div>
                      <div class="socials-footer">
                        <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="https://fonts.google.com/" class="link-one">
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
              <div class="col-md-12 section-t8">
                <div class="title-box-d">
                  <h3 class="title-d">My Properties ({{ count($agent->buildings) }})</h3>
                </div>
              </div>
              <div class="row property-grid grid">
                <div class="col-sm-12">
                  <div class="grid-option">
                    <form method="POST" action="{{ route('building-grid.display') }}">
                      @csrf
                      <input type="text" placeholder="value" name="item" value="{{ old('item') }}">
                      <select class="custom-select" name="option">
                        <option selected>Select an option</option>
                        <option value="By Price">By Price</option>
                        <option value="By Keywords">By Keywords</option>
                      </select>
                      <button type="submit" class="btn btn-success">SEARCH</button>
                    </form>
                  </div>
                </div>
               <div class="container">
                <div class="row">
                  @foreach ($agent->buildings as $building )
    
                  <div class="col-md-4">
                    <div class="card-box-a card-shadow">
                      <div class="img-box-a">
                        <img src="{{ (asset('images/'.$building->images[0])) }}" alt="" class="img-a img-fluid">
                      </div>
                      <div class="card-overlay">
                        <div class="card-overlay-a-content">
                          <div class="card-header-a">
                            <h2 class="card-title-a">
                              <a href="#">{{ $building->address }}
                                <br />{{ $building->city }}</a>
                            </h2>
                          </div>
                          <div class="card-body-a">
                            <div class="price-box d-flex">
                              <span class="price-a">price | {{ $building->price }}</span>
                            </div>
                            <a href="{{ route('info.show',$building->id) }}" class="link-a">Click here to view
                              <span class="bi bi-chevron-right"></span>
                            </a>
                          </div>
                          <div class="card-footer-a">
                            <ul class="card-info d-flex justify-content-around">
                              <li>
                                <h4 class="card-info-title">rooms</h4>
                                <span>{{ $building->rooms }}</span>
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
                </div>
               </div>
              </div>
            </div>
          </div>
        </section><!-- End Agent Single -->
    
      </main><!-- End #main -->
      @auth
        @include('layout.dashboard-footer')
      @endauth
      @guest
        @include('layout.footer')
      @endguest
    

  @auth
</div>
</div>
  @endauth
 @endsection