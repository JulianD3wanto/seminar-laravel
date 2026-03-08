@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">My Seminar</h1>
	<div class="row">
		@foreach($myEvent as $m)
			<div class="col-md-4 mb-4">
				<div class="card h-100 border-bottom-primary">
					<div class="card-body">
						<h5 class="text-primary card-title font-weight-bold">
							<a class="text-primary text-decoration-none" href="{{route('explore.show', ['id' => $m->id])}}">{{$m->nama}}</a>
						</h5>
						<p class="card-text">
						Pembicara : {{$m->pembicara}}<br>
						Tanggal Event : {{\Carbon\Carbon::parse($m->tanggal)->toFormattedDateString()}}<br>
						Tanggal Buka Daftar : {{\Carbon\Carbon::parse($m->tanggal_mulai)->toFormattedDateString()}}<br>
						Tanggal Selesai Daftar : {{\Carbon\Carbon::parse($m->tanggal_selesai)->toFormattedDateString()}}<br>
						Lokasi : {{$m->lokasi_seminar}}<br>
						Google Map : {{$m->gmap}}<br>
						Biaya : {{$m->payment}}</p>
					</div>
					<div class="card-footer">
						<a href="{{action('PesertaController@index', ['id' => $m->id])}}" class="btn btn-warning">Peserta</a>
						<a href="{{action('EventController@editEvent', ['id' => $m->id])}}" class="btn btn-primary">Edit</a>
						<a href="{{action('EventController@detailEvent', ['id' => $m->id])}}" class="btn btn-success">Detail</a>
						<a  onclick="return confirm('Yakin untuk Hapus')" href="{{action('EventController@deleteEvent', ['id' => $m->id ]) }}" class="btn btn-danger">Hapus</a>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>
@endsection