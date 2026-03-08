@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
  <h3 class="mb-3">Pengajuan Menjadi Pembicara</h3>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <form class="mb-3" method="GET" action="{{ route('admin.speaker.index') }}">
    <div class="input-group" style="max-width:480px;">
      <input type="text" name="q" class="form-control" placeholder="Cari nama/email/perusahaan..." value="{{ $q }}">
      <div class="input-group-append">
        <button class="btn btn-primary" type="submit">Cari</button>
      </div>
    </div>
  </form>

  <div class="card">
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table mb-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Perusahaan</th>
              <th>Status</th>
              <th>Tanggal</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @forelse($items as $it)
              <tr>
                <td>{{ $it->id }}</td>
                <td>{{ $it->nama }}</td>
                <td>{{ $it->email }}</td>
                <td>{{ $it->perusahaan }}</td>
                <td>
                  @if($it->status == 'pending') <span class="badge badge-warning">Pending</span> @endif
                  @if($it->status == 'approved') <span class="badge badge-success">Approved</span> @endif
                  @if($it->status == 'rejected') <span class="badge badge-danger">Rejected</span> @endif
                </td>
                <td>{{ $it->created_at->format('d M Y H:i') }}</td>
                <td class="text-right">
                  <a class="btn btn-sm btn-outline-primary" href="{{ route('admin.speaker.show', $it->id) }}">
                    Detail
                  </a>
                </td>
              </tr>
            @empty
              <tr><td colspan="7" class="text-center p-4">Belum ada data.</td></tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <div class="mt-3">
    {{ $items->links() }}
  </div>
</div>
@endsection
