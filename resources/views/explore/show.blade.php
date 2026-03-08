@extends('layouts.default.app')

@section('content')
<style>
    .detail-wrap{
        padding: 26px 0 60px;
        background:
            radial-gradient(900px 380px at 10% 0%, rgba(37,99,235,.10), transparent 60%),
            radial-gradient(900px 380px at 90% 0%, rgba(99,102,241,.08), transparent 60%),
            #ffffff;
    }

    .chip{
        display:inline-flex;
        align-items:center;
        gap:8px;
        padding: 6px 12px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 800;
        background: rgba(37,99,235,.10);
        color:#2563eb;
        border: 1px solid rgba(37,99,235,.18);
    }

    .hero-title{
        font-weight: 900;
        letter-spacing: -.02em;
        color:#0f172a;
        margin: 10px 0 6px;
        line-height: 1.15;
    }
    .hero-sub{
        color: rgba(15,23,42,.62);
        margin: 0 0 18px;
        font-size: 14px;
    }

    .banner{
    border-radius: 16px;
    overflow: hidden;
    background:#fff;
    border: 1px solid rgba(15,23,42,.08);
    box-shadow: 0 16px 45px rgba(2,6,23,.10);
    margin-bottom: 22px;
}

/* tinggi banner konsisten */
.banner-media{
    position: relative;
    width: 100%;
    height: 520px;           /* atur sesuai kebutuhan */
    display:flex;
    align-items:center;
    justify-content:center;
    background: #0b1220;     /* fallback */
}

/* layer blur untuk isi sisi kiri-kanan */
.banner-media::before{
    content:"";
    position:absolute;
    inset:0;
    background-image: var(--bg);
    background-size: cover;
    background-position: center;
    filter: blur(22px);
    transform: scale(1.08);
    opacity: .45;
}

/* lapisan gelap tipis biar blur lebih halus */
.banner-media::after{
    content:"";
    position:absolute;
    inset:0;
    background: rgba(2,6,23,.18);
}

/* poster utama tetap utuh */
.banner-media img{
    position: relative;
    z-index: 1;
    max-width: 100%;
    max-height: 100%;
    width: auto;
    height: auto;
    object-fit: contain;
    display:block;
}

@media (max-width: 767.98px){
    .banner-media{ height: 320px; }
}

    .cardx{
        background:#fff;
        border: 1px solid rgba(15,23,42,.08);
        border-radius: 16px;
        box-shadow: 0 14px 40px rgba(2,6,23,.08);
    }
    .cardx-head{
        padding: 16px 18px 0;
        font-weight: 900;
        color:#0f172a;
    }
    .cardx-body{
        padding: 12px 18px 18px;
        color: rgba(15,23,42,.72);
        font-size: 14px;
        line-height: 1.7;
    }

    .meta{
        display:flex;
        flex-direction:column;
        gap:12px;
        margin-top: 8px;
    }
    .meta-item{
        display:flex;
        gap:10px;
        align-items:flex-start;
    }
    .meta-ic{
        width: 34px;
        height: 34px;
        border-radius: 12px;
        background: rgba(37,99,235,.10);
        color:#2563eb;
        display:flex;
        align-items:center;
        justify-content:center;
        flex: 0 0 auto;
        margin-top: 2px;
    }
    .meta-label{
        font-weight: 800;
        color:#0f172a;
        font-size: 13px;
        margin-bottom: 2px;
    }
    .meta-val{
        color: rgba(15,23,42,.70);
        font-size: 13px;
    }

    .cta-btn{
        border-radius: 14px;
        height: 46px;
        font-weight: 900;
        letter-spacing: .2px;
        box-shadow: 0 14px 32px rgba(37,99,235,.20);
    }

    .help-link{
        color:#2563eb;
        text-decoration:none;
        font-weight: 800;
        word-break: break-word;
    }
    .help-link:hover{ text-decoration: underline; }

    .section-title{
        font-weight: 900;
        color:#0f172a;
        margin: 26px 0 12px;
    }

    /* cegah konten WYSIWYG keluar card */
.desc-content{
    max-width: 100%;
    overflow: hidden;           /* penting */
}

/* semua elemen dalam deskripsi jangan lebih lebar dari card */
.desc-content *{
    max-width: 100% !important; /* penting */
    box-sizing: border-box;
}

/* gambar responsif */
.desc-content img{
    display: block;
    max-width: 100% !important;
    height: auto !important;
}

/* kalau ada table dari editor, bikin scroll saja */
.desc-content table{
    width: 100% !important;
    display: block;
    overflow-x: auto;
}

/* kalau ada iframe/video embed */
.desc-content iframe,
.desc-content video{
    max-width: 100% !important;
}

</style>

<main class="detail-wrap">
    <div class="container">

        {{-- HERO --}}
        <div class="text-center">
            <span class="chip"><i class="fas fa-bolt"></i> Upcoming</span>
            <h1 class="hero-title">{{ $event->nama }}</h1>
            <p class="hero-sub">Acara profesional untuk pengembangan karir Anda</p>
        </div>

        {{-- BANNER IMAGE --}}
        <div class="banner">
    <div class="banner-media" style="--bg:url('{{ url('gambar/'.$event->gambar) }}')">
        <img src="{{ url('gambar/'.$event->gambar) }}" alt="{{ $event->nama }}">
    </div>
</div>
        {{-- 2 COLUMN CONTENT --}}
        <div class="row">
            {{-- LEFT --}}
            <div class="col-lg-8 mb-3 mb-lg-0">
                <div class="cardx h-100">
                    <div class="cardx-head">Tentang Seminar Ini</div>
                    <div class="cardx-body">
                        <div class="mb-3">
                            <strong>Pembicara:</strong> {{ $event->pembicara }}<br>
                            <strong>Instansi:</strong> {{ $event->instansi }}
                        </div>

                        <div class="desc-content">
                            {!! $event->deskripsi !!}
                        </div>
                    </div>
                </div>
            </div>

            {{-- RIGHT --}}
            <div class="col-lg-4">
                <div class="cardx">
                    <div class="cardx-head">Detail Acara</div>
                    <div class="cardx-body">
                        <div class="meta">
                            <div class="meta-item">
                                <div class="meta-ic"><i class="fas fa-calendar-week"></i></div>
                                <div>
                                    <div class="meta-label">Tanggal & Waktu</div>
                                    <div class="meta-val">
                                        {{ \Carbon\Carbon::parse($event->tanggal_mulai)->format('l, d F Y') }}<br>
                                        {{ \Carbon\Carbon::parse($event->tanggal_mulai)->format('H:i') }} - {{ \Carbon\Carbon::parse($event->tanggal_selesai)->format('H:i') }} WIB
                                    </div>
                                </div>
                            </div>

                            <div class="meta-item">
                                <div class="meta-ic"><i class="fas fa-map-marker-alt"></i></div>
                                <div>
                                    <div class="meta-label">Lokasi</div>
                                    <div class="meta-val">{{ $event->lokasi_seminar }}</div>

                                    @if(!empty($event->gmap))
                                        <a class="help-link d-inline-block mt-1" href="{{ $event->gmap }}" target="_blank" rel="noopener">
                                            Lihat Google Maps
                                        </a>
                                    @endif
                                </div>
                            </div>

                            <div class="meta-item">
                                <div class="meta-ic"><i class="fas fa-ticket-alt"></i></div>
                                <div>
                                    <div class="meta-label">Biaya</div>
                                    <div class="meta-val">
                                        @if($event->payment > 0)
                                            Rp {{ number_format($event->payment,0,',','.') }}
                                        @else
                                            Gratis
                                        @endif
                                    </div>
                                </div>
                            </div>

                            <div class="meta-item">
                                <div class="meta-ic"><i class="fas fa-clipboard-list"></i></div>
                                <div>
                                    <div class="meta-label">Periode Pendaftaran</div>
                                    <div class="meta-val">
                                        {{ \Carbon\Carbon::parse($event->tanggal_mulai_daftar)->format('d M Y, H:i') }}
                                        -
                                        {{ \Carbon\Carbon::parse($event->tanggal_selesai_daftar)->format('d M Y, H:i') }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3">
                            <a href="{{ action('JoinController@join', ['id' => $event->id]) }}" class="btn btn-primary btn-block cta-btn">
                                Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- OPTIONAL: Pembicara section (kalau mau seperti screenshot) --}}
        <h3 class="section-title">Pembicara</h3>
        <div class="cardx">
            <div class="cardx-body">
                <div style="font-weight:900; color:#0f172a;">{{ $event->pembicara }}</div>
                <div style="color: rgba(15,23,42,.70); font-size: 13px;">{{ $event->instansi }}</div>
            </div>
        </div>

    </div>
</main>
@endsection
