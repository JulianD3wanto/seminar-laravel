@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Profile</h1>
  @if (session('status'))
      <div class="alert alert-success">
          {{ session('status') }}
      </div>
  @endif
  <form method="POST" action="{{action('ProfileController@updateProfile')}}">
    @method('PUT')
    @csrf
  	<div class="form-group row">
  	  <label class="col-md-2 col-form-label">Name</label>
  	  <div class="col-md-10">
  	    <input type="text" class="form-control" id="name" placeholder="Name" value="{{$user->name}}" name="name">
        @error('name')
          <p class="text-danger mb-0">{{ $message }}</p>
        @enderror
  	  </div>
  	</div>
    <div class="form-group row">
      <label class="col-md-2 col-form-label">Username</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="name" placeholder="Username" value="{{$user->username}}" name="username">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-2 col-form-label">Email</label>
      <div class="col-md-10">
        <input type="email" class="form-control" id="email" placeholder="Email" value="{{$user->email}}" name="email">
        @error('email')
          <p class="text-danger mb-0">{{ $message }}</p>
        @enderror
      </div>
    </div>
   <div class="form-group row">
     <label class="col-md-2 col-form-label">Phone</label>
     <div class="col-md-10">
       <input type="text" class="form-control" id="phone" placeholder="Phone" value="{{$user->phone}}" name="phone">
       @error('phone')
         <p class="text-danger mb-0">{{ $message }}</p>
       @enderror
     </div>
   </div>
   <div class="form-group row">
     <label class="col-md-2 col-form-label">Address</label>
     <div class="col-md-10">
       <input type="text" class="form-control" id="address" placeholder="Address" value="{{$user->address}}" name="address">
     </div>
   </div>
    <div class="form-group row">
      <div class="col-md-12">
        <button type="submit" class="btn btn-primary btn-block">Save</button>
      </div>
    </div>
  </form>

</div>
<!-- End Page Content -->
@endsection
