@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
	<h1 class="h3 mb-4 text-gray-800">My Events</h1>
	<div class="card">
		<div class="card-body">
				<div class="row table-responsive">
					<table class="table table-bordered">
  <tr>
    <th>No</th>
    <th>No Identitas</th>
    <th>Nama</th>
    <th>No Telp</th>
    <th>Instansi</th>
    <th>Info Mengetahui</th>
    <th>Bukti Transfer</th>
    <th>Sertifikat</th>
    <th>Aksi</th>
  </tr>

  @foreach($peserta as $key => $m)
  <tr>
    <td>{{ $key + 1 }}</td>
    <td>{{ $m->no_identitas }}</td>
    <td>{{ $m->nama }}</td>
    <td>{{ $m->no_telp }}</td>
    <td>{{ $m->asal_instansi }}</td>
    <td>{{ $m->sumber_informasi }}</td>

    <td>
      @if(!empty($m->bukti_transfer))
        <a target="_blank" href="{{ url('bukti-tf/'.$m->bukti_transfer) }}">{{ $m->bukti_transfer }}</a>
      @else
        <span class="text-muted">-</span>
      @endif
    </td>

    <td>
      @if(!empty($m->sertifikat))
        <a target="_blank" href="{{ url('file/'.$m->sertifikat) }}">Sudah ada</a>
      @else
        <span class="text-muted">Belum ada</span>
      @endif
    </td>

    <td>
      <a onclick="return confirm('Yakin untuk Hapus')"
         href="{{ action('PesertaController@deletePeserta', ['id' => $m->event_id, 'idPeserta' => $m->id_peserta ]) }}"
         class="btn btn-danger">Hapus</a>

      <a href="{{ action('PesertaController@editPeserta', ['id' => $m->event_id, 'idPeserta' => $m->id_peserta]) }}"
         class="btn btn-warning ml-2">Sertifikat</a>
    </td>
  </tr>
  @endforeach
</table>
				</div>
		</div>
	</div>
</div>
@endsection
