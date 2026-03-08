@extends('layouts.default.app')

@section('content')
    {{-- ====== PAGE STYLES (boleh dipindah ke file CSS) ====== --}}
    <style>
        :root{
            --sg-primary:#2563eb;
            --sg-dark:#0f172a;
        }

        .sg-announcement{
  background: linear-gradient(90deg, rgba(37,99,235,.10), rgba(59,130,246,.06));
  border-bottom: 1px solid rgba(15,23,42,.08);
}
.sg-announcement .wrap{
  display:flex;
  gap:12px;
  align-items:center;
  padding: 10px 0;
}
.sg-announcement .pill{
  font-size:12px;
  padding:6px 10px;
  border-radius:999px;
  background: rgba(37,99,235,.12);
  color: #2563eb;
  font-weight:600;
  white-space:nowrap;
}
.sg-announcement .text{
  color: rgba(15,23,42,.75);
  font-size: 14px;
}
        .sg-announcement:hover .text{ animation-play-state: paused; }
        @keyframes sg-marquee{
            0% { transform: translateX(0); }
            100% { transform: translateX(-60%); }
        }

        .sg-hero{
            position: relative;
            min-height: 420px;
            display:flex;
            align-items:center;
            background:
                radial-gradient(1200px 420px at 10% 20%, rgba(37,99,235,.25), transparent 55%),
                radial-gradient(1000px 420px at 90% 20%, rgba(99,102,241,.18), transparent 55%),
                linear-gradient(135deg, #0b1220 0%, #0f172a 55%, #0b1220 100%);
            color:#fff;
            overflow:hidden;
        }
        .sg-hero:before{
            content:"";
            position:absolute; inset:0;
            background-image: url('https://images.unsplash.com/photo-1524178232363-1fb2b075b655?auto=format&fit=crop&w=1600&q=60');
            background-size:cover;
            background-position:center;
            opacity:.18;
            filter: saturate(1.1);
        }
        .sg-hero .container{ position:relative; z-index:2; }
        .sg-hero h1,
        .sg-hero p {
        color: #fff !important;
        }
        .sg-hero .lead{
        color: rgba(255,255,255,.82) !important;
        }
        .sg-hero .btn{
            border-radius: 12px;
            padding: 12px 16px;
        }
        .sg-hero .btn-primary{
            background: var(--sg-primary);
            border-color: var(--sg-primary);
            box-shadow: 0 12px 30px rgba(37,99,235,.25);
        }
        .sg-hero .btn-outline-light{
            border-radius: 12px;
        }

        .sg-section-title{
            font-weight:800;
            letter-spacing:-.01em;
            color: var(--sg-dark);
        }
        .sg-subtitle{
            color: rgba(15,23,42,.65);
        }

        .sg-card{
            border: 0;
            border-radius: 18px;
            overflow:hidden;
            box-shadow: 0 10px 30px rgba(2,6,23,.08);
            transition: transform .18s ease, box-shadow .18s ease;
        }
        .sg-card:hover{
            transform: translateY(-6px);
            box-shadow: 0 16px 45px rgba(2,6,23,.14);
        }
        .sg-card .thumb{
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        .sg-badge{
            position:absolute;
            top: 14px;
            left: 14px;
            background: rgba(15,23,42,.85);
            color:#fff;
            padding: 8px 10px;
            border-radius: 12px;
            font-size: 12px;
            display:flex; gap:8px; align-items:center;
            backdrop-filter: blur(6px);
        }
        .sg-badge i{ opacity:.9; }

        .sg-card .card-body{
        display: flex;
        flex-direction: column;
        height: 100%;
        }

        .sg-card .mt-3{
        margin-top: auto !important;
        }
        .sg-card .title{
            font-weight: 800;
            color: var(--sg-dark);
            line-height: 1.25;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            min-height: 44px;
        }
        .sg-meta{
            margin-top: 10px;
            display:flex;
            flex-direction:column;
            gap:8px;
            color: rgba(15,23,42,.72);
            font-size: 14px;
        }
        .sg-meta i{
            width: 18px;
            color: rgba(37,99,235,.9);
        }
        .sg-link{
            font-weight:700;
            text-decoration:none;
            color: var(--sg-primary);
        }
        .sg-link:hover{ text-decoration: underline; }

        /* tombol detail */
.sg-detail-btn{
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;

  padding: 10px 16px;
  border-radius: 14px;
  font-weight: 900;
  letter-spacing: .2px;
  text-decoration: none !important;

  color: #fff !important;
  background: var(--sg-primary);
  border: 1px solid var(--sg-primary);
  box-shadow: 0 12px 28px rgba(37,99,235,.18);

  transition: transform .16s ease, box-shadow .16s ease, filter .16s ease;
}

.sg-detail-btn:hover{
  transform: translateY(-2px);
  box-shadow: 0 16px 40px rgba(37,99,235,.26);
  filter: brightness(1.03);
}

.sg-detail-btn:active{
  transform: translateY(0);
  box-shadow: 0 10px 24px rgba(37,99,235,.18);
}

/* icon panah jadi putih */
.sg-detail-btn i{
  color: #fff !important;
  transition: transform .16s ease;
}

.sg-detail-btn:hover i{
  transform: translateY(-2px);
}

        .sg-footer-cta{
            margin-top: 18px;
            display:flex;
            justify-content:center;
        }


        .sg-container-pad{
            padding: 52px 0;
        }

        /* Wrapper tombol di hero */
.sg-hero-actions{
  display: flex;
  flex-wrap: wrap;        /* penting: kalau layar sempit, turun baris */
  gap: 12px;              /* jarak antar tombol */
  align-items: center;
}
.sg-hero-actions i {
 color: #fff !important;
}

/* ===== Hero Button Effects ===== */
.sg-hero-actions .btn{
  position: relative;
  overflow: hidden;
  border-radius: 14px !important;
  padding: 12px 18px !important;
  font-weight: 900;
  letter-spacing: .2px;
  transition: transform .18s ease, box-shadow .18s ease, filter .18s ease;
}

/* hover naik + shadow */
.sg-hero-actions .btn:hover{
  transform: translateY(-3px);
  box-shadow: 0 18px 45px rgba(0,0,0,.28);
}

/* klik */
.sg-hero-actions .btn:active{
  transform: translateY(0);
  box-shadow: 0 12px 26px rgba(0,0,0,.22);
}

/* ikon animasi halus */
.sg-hero-actions .btn i{
  transition: transform .18s ease;
}
.sg-hero-actions .btn:hover i{
  transform: translateX(2px);
}

/* shine / kilau berjalan */
.sg-hero-actions .btn::after{
  content:"";
  position:absolute;
  top:-20%;
  left:-140%;
  width:70%;
  height:140%;
  background: linear-gradient(120deg, transparent, rgba(255,255,255,.25), transparent);
  transform: skewX(-18deg);
  transition: left .55s ease;
  pointer-events:none;
}
.sg-hero-actions .btn:hover::after{
  left:160%;
}

/* Primary: tambah glow halus (warna tetap) */
.sg-hero-actions .btn-primary{
  box-shadow: 0 14px 35px rgba(37,99,235,.28);
}
.sg-hero-actions .btn-primary:hover{
  filter: brightness(1.03);
  box-shadow: 0 22px 55px rgba(37,99,235,.35);
}

/* Outline: efek glass + glow */
.sg-hero-actions .btn-outline-light{
  border-color: rgba(37,99,235,.55) !important;
  color: #fff !important;
  background: rgba(37,99,235,.18) !important;   /* biru transparan */
}
.sg-hero-actions .btn-outline-light:hover{
  background: rgba(37,99,235,.28) !important;
  border-color: rgba(37,99,235,.75) !important;
}

/* fokus (aksesibilitas) */
.sg-hero-actions .btn:focus{
  box-shadow: 0 0 0 .22rem rgba(37,99,235,.25);
}
    </style>

    {{-- ====== Announcement Bar (pengganti marquee) ====== --}}
    <div class="sg-announcement">
        <div class="container">
            <div class="wrap">
                <div class="pill">Info</div>
                <div class="text">
                    Selamat datang di laman resmi SeminarGO, platform pendaftaran seminar & webinar. Temukan acara edukatif
                    berbayar maupun gratis untuk menambah insight, memperluas jaringan, dan terhubung dengan para ahli.
                </div>
            </div>
        </div>
    </div>

    {{-- ====== Hero / Jumbotron ====== --}}
    <section class="sg-hero">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-5 mb-3">Seminar & Webinar yang Relevan, Mudah Daftar.</h1>
                    <p class="lead mb-4">
                        SeminarGO membantu kamu menemukan event edukatif terbaru—mulai dari teknologi, bisnis, hingga pengembangan diri.
                        Jelajahi event, lihat detail, lalu daftar dalam beberapa klik.
                    </p>
                    <div class="sg-hero-actions">
                        <a href="#see" class="btn btn-primary btn-lg">
                            <i class="fas fa-compass me-2"></i> Lihat Seminar Terbaru
                        </a>
                        <a href="/explore" class="btn btn-outline-light btn-lg">
                            Jelajahi Semua
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ====== Content ====== --}}
    <main class="content">
        <section class="sg-container-pad">
            <div class="container">
                <div class="text-center mb-4">
                    <h2 class="sg-section-title" id="see">Seminar Terbaru</h2>
                    <div class="sg-subtitle">Pilih event yang paling cocok untuk kebutuhanmu.</div>
                </div>

<div class="row">
    @foreach ($event as $e)
        <div class="col-md-6 col-lg-4 mb-4">
            <div class="card sg-card h-100 position-relative">
                <a href="{{ route('explore.show', ['id' => $e->id]) }}" class="text-decoration-none">
                    <div class="sg-badge">
                        <i class="fas fa-calendar-week"></i>
                        <span>{{ \Carbon\Carbon::parse($e->tanggal_mulai)->format('M d, Y • H:i') }}</span>
                    </div>

                    <img src="{{ url('gambar/' . $e->gambar) }}" alt="{{ $e->nama }}" class="thumb">
                </a>

                <div class="card-body">
                    <a href="{{ route('explore.show', ['id' => $e->id]) }}" class="text-decoration-none">
                        <div class="title">{{ $e->nama }}</div>
                    </a>

                    <div class="sg-meta">
                        <div>
                            <i class="fas fa-map-marker-alt me-1"></i>
                            <span>{{ $e->lokasi_seminar }}</span>
                        </div>
                    </div>

                    <div class="mt-3 text-center">
                        <a class="sg-detail-btn" href="{{ route('explore.show', ['id' => $e->id]) }}">
                        Lihat Detail
                        <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

                <div class="sg-footer-cta">
                    <a href="/explore" class="btn btn-outline-primary btn-lg mt-4" style="border-radius:12px; background: rgba(37,99,235,.9);">
                        See All Seminar
                    </a>
                </div>
            </div>
        </section>
    </main>
@endsection
