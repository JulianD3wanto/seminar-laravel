@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->

  <!-- Flash Data Session Password -->
  <h1 class="h3 mb-4 text-gray-800">Profile</h1>
  @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
  @elseif (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
  @endif
  
  <!-- Form Password -->
  <form method="POST" action="{{action('ProfileController@updatePassword')}}">
    @method('PUT')
    @csrf
  	<div class="form-group row">
  	  <label class="col-md-2 col-form-label">Current Passowrd</label>
  	  <div class="col-md-10">
  	    <input type="text" class="form-control" id="name" placeholder="Current Password" name="old_password">
        @error('old_password')
          <p class="text-danger mb-0">{{ $message }}</p>
        @enderror
  	  </div>
  	</div>
    <div class="form-group row">
      <label class="col-md-2 col-form-label">New Password</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="name" placeholder="New Password" name="new_password">
        @error('new_password')
          <p class="text-danger mb-0">{{ $message }}</p>
        @enderror
      </div>
    </div>
    <div class="form-group row">
      <label class="col-md-2 col-form-label">Confirm New Password</label>
      <div class="col-md-10">
        <input type="text" class="form-control" id="name" placeholder="Confirm New Password" name="new_password_confirmation">
        @error('new_password_confirmation')
          <p class="text-danger mb-0">{{ $message }}</p>
        @enderror
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
