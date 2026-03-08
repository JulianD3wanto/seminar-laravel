@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Edit Seminar</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
	<form action="{{action('EventController@updateEvent', ['id' => $event->id])}}" method="POST" enctype="multipart/form-data">
		@method('PUT')
		@csrf

		<div class="form-group row">
			<label class="col-md-2 col-form-label">Nama Seminar</label>
			<div class="col-md-10">
				<input type="text" class="form-control"  id="nama" value="<?= $event->nama ?>" placeholder="Nama Seminar" name="nama" required="required">
				@error('nama')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Pembicara</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="pembicara" value="<?= $event->pembicara ?>" placeholder="Pembicara" name="pembicara" value="" required="required">
				@error('instansi')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Instansi</label>
			<div class="col-md-10">
				<input type="text" class="form-control" id="instansi" value="<?= $event->instansi ?>" placeholder="Instansi" name="instansi" value="" required="required">
				@error('instansi')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Mulai Acara</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" value="{{\Carbon\Carbon::parse($event->tanggal_mulai)->format('Y-m-d')}}T{{\Carbon\Carbon::parse($event->tanggal_mulai)->format('H:i')}}" id="tanggal_mulai" placeholder="Tanggal Mulai" name="tanggal_mulai" value="" required="required">
				@error('tanggal_mulai')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Selesai Acara</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" value="{{\Carbon\Carbon::parse($event->tanggal_selesai)->format('Y-m-d')}}T{{\Carbon\Carbon::parse($event->tanggal_selesai)->format('H:i')}}" id="tanggal_selesai" placeholder="Tanggal Selesai" name="tanggal_selesai" value="" required="required">
				@error('tanggal_selesai')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Mulai Daftar</label>
			<div class="col-md-10">
				<input type="datetime-local" class="form-control" value="{{\Carbon\Carbon::parse($event->tanggal_mulai_daftar)->format('Y-m-d')}}T{{\Carbon\Carbon::parse($event->tanggal_mulai_daftar)->format('H:i')}}" id="tanggal_mulai_daftar" placeholder="Tanggal Mulai" name="tanggal_mulai_daftar" value="" required="required">
				@error('tanggal_mulai_daftar')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Tanggal Selesai Daftar</label>
			<div class="col-md-10">
				<input type="datetime-local" value="{{\Carbon\Carbon::parse($event->tanggal_selesai_daftar)->format('Y-m-d')}}T{{\Carbon\Carbon::parse($event->tanggal_selesai_daftar)->format('H:i')}}" class="form-control" id="tanggal_selesai_daftar" placeholder="Tanggal Selesai" name="tanggal_selesai_daftar" value="" required="required">
				@error('tanggal_selesai_daftar')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Lokasi Seminar</label>
			<div class="col-md-10">
				<input type="text" class="form-control" value="<?= $event->lokasi_seminar ?>" id="lokasi_seminar" placeholder="Lokasi" name="lokasi_seminar" required="required">
				@error('alamat')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Gmap</label>
			<div class="col-md-10">
				<input type="text" class="form-control" value="<?= $event->gmap ?>" id="gmap" placeholder="Gmap" name="gmap" required="required">
				@error('alamat')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Pembayaran</label>
			<div class="col-md-10">
				<input type="number" class="form-control" value="<?= $event->payment ?>" id="payment" placeholder="Rp. " name="payment" required="required">
				@error('alamat')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Gambar</label><br>
			<?= $event->gambar ?>
			<div class="col-md-10">
				<input type="file" accept="image/*" class="form-control-file" id="gambar" name="gambar">
				@error('gambar')
					<p class="text-danger mb-0">{{ $message }}</p>
				@enderror
			</div>
		</div>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Deskripsi</label>
			<div class="col-md-10">
				<textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Deskripsi" required="required"><?= nl2br($event->deskripsi) ?></textarea>
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