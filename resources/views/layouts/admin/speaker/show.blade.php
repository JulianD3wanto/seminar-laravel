@extends('layouts.admin.app')

@section('content')
<div class="container-fluid">
  <div class="d-flex align-items-center justify-content-between mb-3">
    <h3 class="mb-0">Detail Pengajuan #{{ $item->id }}</h3>
    <a href="{{ route('admin.speaker.index') }}" class="btn btn-light">Kembali</a>
  </div>

  @if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
  @endif

  <div class="card mb-3">
    <div class="card-body">
      <div class="row">
        <div class="col-md-6">
          <p><b>Nama:</b> {{ $item->nama }}</p>
          <p><b>Email:</b> {{ $item->email }}</p>
          <p><b>Whatsapp:</b> {{ $item->whatsapp }}</p>
          <p><b>Perusahaan:</b> {{ $item->perusahaan }}</p>
          <p><b>Website:</b> {{ $item->website ?? '-' }}</p>
          <p><b>Sosmed:</b> {{ $item->sosmed }}</p>
        </div>
        <div class="col-md-6">
          <p><b>Pernah jadi pembicara:</b> {{ $item->pernah }}</p>
          <p><b>Keterangan webinar:</b> {{ $item->keterangan_webinar }}</p>
          <p><b>Status:</b> {{ $item->status }}</p>
          <p><b>Dikirim:</b> {{ $item->created_at->format('d M Y H:i') }}</p>
          <hr>
          <p class="mb-1"><b>reCAPTCHA</b></p>
          <p class="mb-0">Score: {{ $item->recaptcha_score ?? '-' }}</p>
          <p class="mb-0">Action: {{ $item->recaptcha_action ?? '-' }}</p>
          <p class="mb-0">Hostname: {{ $item->recaptcha_hostname ?? '-' }}</p>
        </div>
      </div>

      <hr>

      <p class="mb-1"><b>Pengalaman</b></p>
      <div style="white-space:pre-wrap;">{{ $item->pengalaman }}</div>

      <hr>

      <form method="POST" action="{{ route('admin.speaker.status', $item->id) }}" class="mt-3">
        @csrf
        <div class="form-row align-items-end">
          <div class="form-group col-md-4">
            <label><b>Ubah Status</b></label>
            <select name="status" class="form-control">
              <option value="pending" {{ $item->status=='pending'?'selected':'' }}>Pending</option>
              <option value="approved" {{ $item->status=='approved'?'selected':'' }}>Approved</option>
              <option value="rejected" {{ $item->status=='rejected'?'selected':'' }}>Rejected</option>
            </select>
          </div>
          <div class="form-group col-md-2">
            <button class="btn btn-primary btn-block" type="submit">Simpan</button>
          </div>
        </div>
      </form>

    </div>
  </div>
</div>
@endsection
