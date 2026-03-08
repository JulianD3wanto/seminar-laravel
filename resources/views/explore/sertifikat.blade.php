@extends('layouts.default.app')

@section('content')
    <div class="cssmarque">
        <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="10"
            behavior="scroll">
            <h1>Dowload Sertifikat bisa dilakukan setelah anda menghadiri acara dan mengisi daftar hadir , admin akan
                mengirimkan sertifikat kepada anda.</h1>
        </marquee>
    </div>
    <main class="detail">
        <div class="head">
            <div class="container">
                <div class="row head">
                    <div class="col-md-7">
                        <img src="{{ url('gambar/' . $event->gambar) }}" class="img-fluid rounded">
                    </div>
                    <div class="col-md-5">
                        <h1>{{ $event->nama }}</h1>
                        <h5>Pembicara : {{ $event->pembicara }}<br>{{ $event->instansi }}</h5>
                        <p>
                            <i class="fas fa-calendar-week"></i>Tanggal Seminar
                            :{{ \Carbon\Carbon::parse($event->tanggal_mulai_daftar)->format('M d Y, H:i') }} -
                            {{ \Carbon\Carbon::parse($event->tanggal_selesai)->format('M d Y, H:i') }}
                            <br>
                            <i class="fas fa-calendar-week"></i>Tanggal Pendaftaran :
                            {{ \Carbon\Carbon::parse($event->tanggal_mulai_daftar)->format('M d Y, H:i') }} -
                            {{ \Carbon\Carbon::parse($event->tanggal_selesai)->format('M d Y, H:i') }}

                            <br>
                            <i class="fas fa-map-marker-alt"></i>Lokasi Seminar : {{ $event->lokasi_seminar }} <br>
                            <i class="fas fa-map-marker-alt"></i>Google Maps : {{ $event->gmap }} <br>
                        </p>
                        <?php if ($event->sertifikat != ''): ?>
                        <marquee class="py-3" direction="left" onmouseover="this.stop()" onmouseout="this.start()"
                            scrollamount="10" behavior="scroll">
                            Terimakasih telah menghadiri seminar kami, silahkan dowload sertifikat anda !
                        </marquee>
                        <a href="{{ url('file/' . $event->sertifikat) }}" class="btn btn-success">Download Sertifikat</a>
                        <?php else: ?>
                        <p>Sertifikat Belum Tersedia silahkan copy link dibawah, simpan dengan benar link ini!, untuk
                            mendownload
                            sertifikat setelah kami upload</p>
                        <input type="text" readonly
                            value="<?= action('JoinController@sertifikat', ['id' => $event->event_id, 'idPeserta' => $event->peserta_id]) ?>"
                            class="form-control" name="">
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="body">
            <div class="container">
                <div class="row">
                    <div class="col-8">
                        <h3>Deskripsi</h3>
                        {!! $event->deskripsi !!}
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
