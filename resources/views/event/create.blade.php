@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Create Seminar</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
	<form action="{{action('EventController@storeEvent')}}" method="POST" enctype="multipart/form-data">
		@csrf

		<div class="form-group row">
			<label class="col-md-2 col-form-label">Nama Seminar</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="nama" placeholder="Nama Seminar" name="nama" required="required">
				@error('nama')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Pembicara</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="pembicara" placeholder="Pembicara" name="pembicara" value="" required="required">
				@error('instansi')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Instansi</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="instansi" placeholder="Instansi" name="instansi" value="" required="required">
				@error('instansi')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Mulai Acara</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" id="tanggal_mulai" placeholder="Tanggal Mulai" name="tanggal_mulai" value="" required="required">
				@error('tanggal_mulai')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Selesai Acara</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" id="tanggal_selesai" placeholder="Tanggal Selesai" name="tanggal_selesai" value="" required="required">
				@error('tanggal_selesai')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Mulai Daftar</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" id="tanggal_mulai_daftar" placeholder="Tanggal Mulai" name="tanggal_mulai_daftar" value="" required="required">
				@error('tanggal_mulai')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Selesai Daftar</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" id="tanggal_selesai_daftar" placeholder="Tanggal Selesai" name="tanggal_selesai_daftar" value="" required="required">
				@error('tanggal_selesai')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Lokasi Seminar</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="lokasi_seminar" placeholder="Lokasi" name="lokasi_seminar" required="required">
				@error('alamat')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Gmap</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="gmap" placeholder="Gmap" name="gmap" required="required">
				@error('alamat')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Pembayaran</label>
			<div class="col-md-10">
				<input type="number" class="form-control" id="payment" placeholder="Rp. " name="payment" required="required">
				@error('alamat')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Gambar</label>
			<div class="col-md-10">
				<input type="file" accept="image/*" class="form-control-file" id="gambar" name="gambar" required="required">
				@error('gambar')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Deskripsi</label>
			<div class="col-md-10">
				<textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi" required="required"></textarea>
				@error('deskripsi')
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
@endsection
