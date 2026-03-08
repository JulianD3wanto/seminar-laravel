@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">Edit Seminar</h1>
	@if(session('status'))
		<div class="alert alert-success">
			{{session('status')}}
		</div>
	@endif
	<form action="{{action('PesertaController@updatePeserta', ['id' => $peserta->event_id, 'idPeserta'=> $peserta->id_peserta ])}}" method="POST" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<a href="{{url('file/'.$peserta->sertifikat)}}"><?= $peserta->sertifikat ?></a><br><br>
		<div class="form-group row">
			<label class="col-md-2 col-form-label">Sertifikat</label><br>
			<div class="col-md-10">
				<input type="file" class="form-control-file" id="file" name="file">
				@error('file')
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