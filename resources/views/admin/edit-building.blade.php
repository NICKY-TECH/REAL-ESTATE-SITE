@extends('layout.app')

@section('content')
@include('layout.dashboard-header')
<div class="app-wrapper">
	    
  <div class="app-content pt-3 p-md-3 p-lg-4">
    <div class="container-xl">


      <h1 class="text-center mt-2"> EDIT BUILDING INFO</h1>

      <div class="container">
          <form method="POST" action="{{ route('info.update',$info->id) }}" class="add-building" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
              <label for="identification" class="mb-1">Agent's Name</label>
              <select name="agent_id" class="form-select mb-3" aria-label="Default select example">
                <option>Open this select menu</option>
               @foreach ($agents as $agent )
               <option value="{{ $agent->id?$agent->id:$user_id }}" {{ $agent->id==$user_id?'selected':'' }}>{{ $agent->agent_name }}</option>
                 
               @endforeach
              </select>
              @error('agent_id')
              <p class="mb-3 text-center text-danger">{{ $message }}</p>
                
              @enderror
              <div class="form-group mb-1">
                <label for="garage">Garage</label>
                <input type="text" class="form-control mb-3" id="garage" placeholder="2" name="garage" value="{{$info->garage}}">
              </div>
              @error('garage')
              <p class="mb-3 text-center text-danger">{{ $message }}</p>
                
              @enderror
              <div>
                <label for="image" class="form-label mb-1">Images</label>
                <input class="form-control mb-3" type="file" id="image" multiple name="images[]">
              </div> 
              {{-- <p class="display text-center">expected dimensions: min-width:1080 and min-height:1350</p> --}}
              <p class="mb-3 text-center text-danger"> 
                {{ $errors->first('images*') }} 
              </p>
              <div class="form-group">
                <label for="description" class="mb-1">Amenities</label>
                <textarea class="form-control mb-3" id="description"   name="description" rows="3" cols="8">{{ $info->description }}</textarea>
              </div>
              @error('description')
              <p class="mb-3 text-center text-danger">{{ $message }}</p>
                
              @enderror
              <div class="form-group mb-1">
                <label for="prices">Prices</label>
                <input type="text" class="form-control mb-3" id="prices"  name="price"  placeholder="Amount" value="{{$info->price }}">
              </div>
              @error('price')
              <p class="mb-3 text-center text-danger">{{ $message }}</p>
                
              @enderror
              <div class="form-group mb-1">
                <label for="city">City</label>
                <input type="text" class="form-control mb-3" id="city"  name="city" placeholder="Benin City" value="{{ $info->city}}">
              </div>
              @error('city')
              <p class="mb-3 text-center text-danger">{{ $message }}</p>
                
              @enderror
              <div class="form-group mb-1">
                <label for="address">Address</label>
                <input type="text" class="form-control mb-3" id="address"  name="address" placeholder="4 Osas street off Odu" value="{{ $info->address }}">
              </div>
              @error('address')
              <p class="mb-3 text-center text-danger">{{ $message }}</p>
                
              @enderror
              <div class="form-group mb-1">
                <label for="rooms">Number of rooms</label>
                <input type="text" class="form-control mb-3" id="rooms" name="rooms"  placeholder="23" value="{{ $info->rooms }}">
              </div>
              @error('rooms')
              <p class="mb-3 text-center text-danger">{{ $message }}</p>
                
              @enderror
      
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="sold" value="sold">
                <label class="form-check-label" for="sold">
               SOLD
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="status" id="rent" value="for rent">
                <label class="form-check-label" for="rent">
                RENTED
                </label>
              </div>
      
              @error('status')
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
    
