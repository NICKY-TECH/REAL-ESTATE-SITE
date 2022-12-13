@extends('layout.app')

@section('content')

<h1 class="text-center mt-2">BUILDING INFO</h1>

<div class="container">
    <form method="post" action="{{ route('info.store') }}" class="add-building" enctype="multipart/form-data">
      @csrf
        <label for="identification" class="mb-1">Agent's Name</label>
        <select name="agent_id" class="form-select mb-3" aria-label="Default select example">
          <option selected>Open this select menu</option>
         @foreach ($agents as $agent )
         <option value="{{ $agent->id }}">{{ $agent->agent_name }}</option>
           
         @endforeach
        </select>
        @error('agent_id')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="garage">Garage</label>
          <input type="text" class="form-control mb-3" id="garage" placeholder="2" name="garage" value="{{ old('garage') }}">
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
          <textarea class="form-control mb-3" id="description"   name="description" rows="3" cols="8">{{ old('description') }}</textarea>
        </div>
        @error('description')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="prices">Prices</label>
          <input type="text" class="form-control mb-3" id="prices"  name="price"  placeholder="Amount" value="{{ old('price') }}">
        </div>
        @error('price')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="city">City</label>
          <input type="text" class="form-control mb-3" id="city"  name="city" placeholder="Benin City" value="{{ old('city') }}">
        </div>
        @error('city')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="address">Address</label>
          <input type="text" class="form-control mb-3" id="address"  name="address" placeholder="4 Osas street off Odu" value="{{ old('address') }}">
        </div>
        @error('address')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror
        <div class="form-group mb-1">
          <label for="rooms">Number of rooms</label>
          <input type="text" class="form-control mb-3" id="rooms" name="rooms"  placeholder="23" value="{{ old('rooms') }}">
        </div>
        @error('rooms')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror

        <div class="form-check">
          <input class="form-check-input" type="radio" name="status" id="sale" value="for sale">
          <label class="form-check-label" for="sale">
            FOR SALE
          </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="status" id="rent" value="for rent">
          <label class="form-check-label" for="rent">
           FOR RENT
          </label>
        </div>

        @error('status')
        <p class="mb-3 text-center text-danger">{{ $message }}</p>
          
        @enderror

        <button type="submit" class="btn btn-success mt-4">ADD</button>
      </form>
</div>
    
@endsection
    
