@extends('layouts.default.app')

@section('content')
<main class="detail bg-light py-4">
  {{-- Header / Hero --}}
  <section class="py-4">
    <div class="container">
      <div class="card border-0 shadow-sm overflow-hidden">
        <div class="card-body p-4 p-md-5">
          <div class="d-flex flex-column flex-md-row justify-content-between align-items-start gap-3">
            <div>
              <h1 class="mb-2">{{$event->nama}}</h1>
              <div class="text-muted">
                <div class="mb-1">
                  <i class="fas fa-microphone-alt me-2"></i>
                  <strong>Pembicara:</strong> {{$event->pembicara}}
                </div>
                <div>
                  <i class="fas fa-building me-2"></i>
                  <strong>Instansi:</strong> {{$event->instansi}}
                </div>
              </div>
            </div>

            {{-- Badge biaya --}}
            <div class="text-md-end">
              @if($event->payment > 0)
                <span class="badge bg-warning text-dark px-3 py-2 fs-6">
                  Berbayar: Rp {{ number_format($event->payment, 0, ',', '.') }}
                </span>
              @else
                <span class="badge bg-success text-white px-3 py-2">Gratis</span>
              @endif
            </div>
          </div>

          <hr class="my-4">

          <div class="row g-3">
            <div class="col-md-6">
              <div class="p-3 rounded bg-light">
                <div class="d-flex align-items-start">
                  <i class="fas fa-calendar-week me-3 mt-1"></i>
                  <div>
                    <div class="fw-semibold">Tanggal Seminar</div>
                    <div class="text-muted">
                      {{ \Carbon\Carbon::parse($event->tanggal_mulai)->format('M d Y, H:i') }}
                      -
                      {{ \Carbon\Carbon::parse($event->tanggal_selesai)->format('M d Y, H:i') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="p-3 rounded bg-light">
                <div class="d-flex align-items-start">
                  <i class="fas fa-clipboard-list me-3 mt-1"></i>
                  <div>
                    <div class="fw-semibold">Periode Pendaftaran</div>
                    <div class="text-muted">
                      {{ \Carbon\Carbon::parse($event->tanggal_mulai_daftar)->format('M d Y, H:i') }}
                      -
                      {{ \Carbon\Carbon::parse($event->tanggal_selesai_daftar)->format('M d Y, H:i') }}
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="p-3 rounded bg-light">
                <div class="d-flex align-items-start">
                  <i class="fas fa-map-marker-alt me-3 mt-1"></i>
                  <div>
                    <div class="fw-semibold">Lokasi</div>
                    <div class="text-muted">{{$event->lokasi_seminar}}</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6">
              <div class="p-3 rounded bg-light">
                <div class="d-flex align-items-start">
                  <i class="fas fa-location-arrow me-3 mt-1"></i>
                  <div class="w-100">
                    <div class="fw-semibold">Google Maps</div>
                    <div class="text-muted text-break">
                      @php
                        $gmap = trim($event->gmap ?? '');
                        $isUrl = $gmap && (str_starts_with($gmap, 'http://') || str_starts_with($gmap, 'https://'));
                      @endphp

                      @if($isUrl)
                        <a href="{{$gmap}}" target="_blank" rel="noopener" class="text-decoration-none">
                          Buka lokasi di Google Maps <i class="fas fa-external-link-alt ms-1"></i>
                        </a>
                      @else
                        {{$gmap ?: '-'}}
                      @endif
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
  </section>

  {{-- Form Daftar --}}
  <section class="pb-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">

          <div class="card border-0 shadow-sm">
            <div class="card-body p-4 p-md-5">
              <div class="d-flex align-items-center justify-content-between flex-wrap gap-2 mb-3">
                <h2 class="h4 mb-0">
                  <i class="fas fa-edit me-2 text-primary"></i>Daftar Seminar
                </h2>
                <small class="text-muted">Isi data dengan benar ya 🙌</small>
              </div>

              @if(session('status'))
                <div class="alert alert-success">
                  <i class="fas fa-check-circle me-2"></i>{{ session('status') }}
                </div>
              @endif

              <form action="{{ action('JoinController@addJoin', ['id' => $event->id]) }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row g-3">

                  <div class="col-md-6">
                    <label class="form-label">No Identitas</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-id-card"></i></span>
                      <input type="text"
                             class="form-control @error('no_identitas') is-invalid @enderror"
                             id="no_identitas"
                             name="no_identitas"
                             placeholder="Masukkan No Identitas"
                             value="{{ old('no_identitas') }}"
                             required>
                      @error('no_identitas')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Nama Lengkap</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                      <input type="text"
                             class="form-control @error('nama') is-invalid @enderror"
                             id="nama"
                             name="nama"
                             placeholder="Masukkan Nama Lengkap"
                             value="{{ old('nama') }}"
                             required>
                      @error('nama')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">No Telp</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-phone"></i></span>
                      <input type="text"
                             class="form-control @error('no_telp') is-invalid @enderror"
                             id="no_telp"
                             name="no_telp"
                             placeholder="Contoh: 08xxxxxxxxxx"
                             value="{{ old('no_telp') }}"
                             required>
                      @error('no_telp')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-md-6">
                    <label class="form-label">Instansi</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-building"></i></span>
                      <input type="text"
                             class="form-control @error('instansi') is-invalid @enderror"
                             id="instansi"
                             name="instansi"
                             placeholder="Nama instansi / organisasi"
                             value="{{ old('instansi') }}"
                             required>
                      @error('instansi')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  <div class="col-12">
                    <label class="form-label">Mengetahui seminar dari</label>
                    <div class="input-group">
                      <span class="input-group-text"><i class="fas fa-bullhorn"></i></span>
                      <input type="text"
                             class="form-control @error('sumber_informasi') is-invalid @enderror"
                             id="sumber_informasi"
                             name="sumber_informasi"
                             placeholder="Contoh: WA / Website / Pamflet / Teman, dll"
                             value="{{ old('sumber_informasi') }}"
                             required>
                      @error('sumber_informasi')
                        <div class="invalid-feedback">{{ $message }}</div>
                      @enderror
                    </div>
                  </div>

                  @if($event->payment > 0)
                    <div class="col-12">
                      <div class="alert alert-warning mb-0">
                        <i class="fas fa-info-circle me-2"></i>
                        Seminar berbayar. Silakan upload bukti transfer.
                      </div>
                    </div>

                    <div class="col-12">
                      <label class="form-label">Bukti Transfer</label>
                      <div class="input-group">
                        <span class="input-group-text"><i class="fas fa-receipt"></i></span>
                        <input type="file"
                               class="form-control @error('bukti_transfer') is-invalid @enderror"
                               id="bukti_transfer"
                               name="bukti_transfer"
                               required>
                        @error('bukti_transfer')
                          <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                      </div>
                      <small class="text-muted">Format disarankan: JPG/PNG/PDF</small>
                    </div>
                  @endif

                  <div class="col-12 pt-2">
                    <button type="submit" class="btn btn-primary btn-lg w-100">
                      <i class="fas fa-paper-plane me-2"></i>Kirim Pendaftaran
                    </button>
                    <small class="text-muted d-block text-center mt-2">
                      Dengan klik tombol ini, data akan tersimpan untuk proses pendaftaran.
                    </small>
                  </div>

                </div>
              </form>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>
</main>
@endsection
