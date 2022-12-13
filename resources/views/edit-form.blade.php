@extends('layout.dashboard-header')

<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">

<div class="container">
  <form class="edit-form-ui" method="POST" action="{{ route('account.update',Auth::user()->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group mb-4">
      <label for="exampleFormControlFile1">Profile Picture</label>
      <br>
      <input type="file" class="form-control-file" id="exampleFormControlFile1" name="profile_picture">
    </div>
<div class="form-group mb-4">
  <label for="name">Name</label>
  <input type="text" class="form-control" id="name" placeholder="Name" name="name" value="{{ Auth::user()->name}}">
</div>
<div class="form-group mb-4">
  <label for="country">Country</label>
  <input type="text" class="form-control" id="country" placeholder="country" name="country" value="{{ Auth::user()->country}}">
</div>

<div class="form-group mb-4">
  <label for="phone">Phone Number</label>
  <input type="text" class="form-control" id="phone" placeholder="000000" name="phone_number" value="{{ Auth::user()->phone_number }}">
</div>

<button type="submit" class="btn btn-primary text-white font-weight-bold">Submit</button>
</form>
</div>

</div>
  </div>
</div>

@include('layout.dashboard-footer')