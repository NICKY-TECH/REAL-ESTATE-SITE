@extends('layout.app')

@section('content')
@include('layout.dashboard-header')
<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">
<h1 class="text-center mt-2 mb-3">EDIT AGENT'S INFO</h1>

<p class="text-center">
  @if (isset($message))
  {{ $message }}
    
  @endif
</p>

<div class="container">
    <form method="POST" action="{{ route('details.update',$details->id) }}" class="add-building" enctype="multipart/form-data">
      @csrf
      @method('PUT')
        <div class="form-group">
          <label for="agent_name" class="mb-1">Agent's Name</label>
          <input type="text" class="form-control mb-3" id="agent_name" name="agent_name" value="{{ $details->agent_name }}">
        </div>
        @error('agent_name')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="facebook">Facebook</label>
          <input type="text" class="form-control mb-3" id="facebook" name="facebook" value="{{ $details->facebook }}">
        </div>
        @error('facebook')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div>
          <label for="image" class="form-label mb-1">Agent's Image</label>
          <input class="form-control mb-3" type="file" id="image" name="image">
        </div>
        @error('image')
        <p class="mb-3 text-center text-danger">{{ $message }} <br>expected dimensions: min-width 800 and min-height 896</p>
          
        @enderror
        <div class="form-group">
          <label for="about_agent" class="mb-1">About Agent</label>
          <textarea class="form-control mb-3" id="about_agent"   name="about_agent" rows="3" cols="8">{{ $details->about_agent }}</textarea>
        </div>
        @error('about_agent')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="twitter">Twitter</label>
          <input type="text" class="form-control mb-3" id="twitter"  name="twitter" value="{{ $details->twitter }}">
        </div>
        @error('twitter')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="email">Email</label>
          <input type="email" class="form-control mb-3" id="email"  name="email" placeholder="tech@gmail.com" value="{{ $details->email}}">
        </div>
        @error('email')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
            <label for="linkedIn">LinkedIn</label>
            <input type="text" class="form-control mb-3" id="linkedIn"  name="linkedIn" value="{{ $details->linkedIn }}">
          </div>
          @error('linkedIn')
          <p class="mb-3 text-center text-danger">{{ $message }}</p>
            
          @enderror
        <div class="form-group mb-1">
          <label for="instagram">Instagram</label>
          <input type="text" class="form-control mb-3" id="instagram" name="instagram" value="{{ $details->instagram }}">
        </div>
        @error('instagram')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="phone number">Phone Number</label>
          <input type="tel" class="form-control mb-3" id="phone number" name="phone_number" value="{{ $details->phone_number}}">
        </div>
        @error('phone_number')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <button type="submit" class="btn btn-success mt-4">EDIT</button>
      </form>
</div>
    </div>
  </div>
</div>
@include('layout.dashboard-footer')
    
@endsection
    
