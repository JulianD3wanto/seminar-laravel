@extends('layouts.admin.app')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Event Terdekat</h1>

  <div class="row">
  	@foreach($event[0] as $e)
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-danger shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col">
                <div class="font-weight-bold text-uppercase mb-2">
                  <a class="text-danger text-decoration-none" href="{{route('explore.show', ['id' => $e->id])}}">{{$e->nama}}</a>
                </div>
                <div class="mb-2">
                  <i class="fas fa-calendar-week mr-2"></i>{{\Carbon\Carbon::parse($e->tanggal_mulai)->format('M d Y, H:i')}}
                </div>
                <div class="mb-1">
                  <i class="fas fa-map-marker-alt mr-2"></i>{{$e->lokasi_seminar}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <h1 class="h3 mb-4 text-gray-800">Event Terbaru</h1>

  <div class="row">
    @foreach($event[1] as $e)
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <div class="font-weight-bold text-primary text-uppercase mb-3">
                  <a class="text-primary text-decoration-none" href="{{route('explore.show', ['id' => $e->id])}}">{{$e->nama}}</a>
                </div>
                <div class="mb-2">
                  <i class="fas fa-calendar-week mr-2"></i>{{\Carbon\Carbon::parse($e->tanggal_mulai)->format('M d Y, H:i')}}
                </div>
                <div class="mb-1">
                  <i class="fas fa-map-marker-alt mr-2"></i>{{$e->lokasi_seminar}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <h1 class="h3 mb-4 text-gray-800">Informasi</h1>

  <div class="row">
     <?php if(Auth::user()->id == 1): ?>
  	<div class="col-xl-3 col-md-6 mb-4">
  	  <div class="card border-left-primary shadow h-100 py-2">
  	    <div class="card-body">
  	      <div class="row no-gutters align-items-center">
  	        <div class="col mr-2">
  	          <div class="font-weight-bold text-primary text-uppercase mb-3">
               <a class="text-primary text-decoration-none">Seminar Was Created</a> 
              </div>
              <!-- 
                Get My Event
               -->
  	          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$event[2]}} Seminar</div>
  	        </div>
  	        <div class="col-auto">
  	          <i class="fas fa-calendar fa-2x text-gray-300"></i>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
  	</div>
  	<?php endif; ?>

  	<div class="col-xl-3 col-md-6 mb-4">
  	  <div class="card border-left-success shadow h-100 py-2">
  	    <div class="card-body">
  	      <div class="row no-gutters align-items-center">
  	        <div class="col mr-2">
  	          <div class="font-weight-bold text-success text-uppercase mb-3">
               <a class="text-success text-decoration-none">Seminar Was Joined</a> 
              </div>
              <!-- 
                Get My Event Joined
               -->
  	          <div class="h5 mb-0 font-weight-bold text-gray-800">{{$event[3]}} Peserta</div>
  	        </div>
  	        <div class="col-auto">
  	          <i class="fas fa-calendar fa-2x text-gray-300"></i>
  	        </div>
  	      </div>
  	    </div>
  	  </div>
  	</div>
  </div>

</div>
<!-- End Page Content -->
@endsection
