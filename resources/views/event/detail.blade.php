@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Detail Seminar</h1>
	

	<table class="table table-bordered table-hover">
		@foreach($event as $e)
		<tr>
			<th>Nama Seminar</th>
			<td>{{$e->nama}}</td>
		</tr>
		<tr>
			<th>Pembicara</th>
			<td>{{$e->pembicara}}</td>
		</tr>
		<tr>
			<th>Instansi</th>
			<td>{{$e->instansi}}</td>
		</tr>
		<tr>
			<th>Tanggal Mulai</th>
			<td>{{\Carbon\Carbon::parse($e->tanggal_mulai)->format('M d Y, H:i')}}</td>
		</tr>
		<tr>
			<th>Tanggal Selesai</th>
			<td>{{\Carbon\Carbon::parse($e->tanggal_selesai)->format('M d Y, H:i')}}</td>
		</tr>
		<tr>
			<th>Tanggal Mulai Daftar</th>
			<td>{{\Carbon\Carbon::parse($e->tanggal_mulai_daftar)->format('M d Y, H:i')}}</td>
		</tr>
		<tr>
			<th>Tanggal Selesai Daftar</th>
			<td>{{\Carbon\Carbon::parse($e->tanggal_selesai_daftar)->format('M d Y, H:i')}}</td>
		</tr>
		<tr>
			<th>Lokasi</th>
			<td>{{$e->lokasi_seminar}}</td>
		</tr>
		<tr>
			<th>Gmap</th>
			<td>{{$e->gmap}}</td>
		</tr>
		<tr>
			<th>User Joined</th>
			<td>{{count($pesertaevent)}}</td>
		</tr>
		<tr>
			<th>Deskripsi</th>
			<td><?= nl2br($e->deskripsi) ?></td>
		</tr>
		<tr>
			<th>Biaya</th>
			<td><?= nl2br($e->payment) ?></td>
		</tr>
		@endforeach
	</table>
</div>
@endsection