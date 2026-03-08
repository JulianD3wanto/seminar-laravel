@extends('layouts.default.app')

@section('content')
<style>
    .explore-wrap{
        padding: 34px 0 60px;
        background:
            radial-gradient(900px 380px at 10% 0%, rgba(37,99,235,.10), transparent 60%),
            radial-gradient(900px 380px at 90% 0%, rgba(99,102,241,.08), transparent 60%),
            #ffffff;
    }

    .explore-wrap .row{
    margin-top: 16px;
}

    .explore-head{
        display:flex;
        align-items:flex-end;
        justify-content:space-between;
        gap:16px;
        margin-bottom: 18px;
    }
    .explore-title{
        font-weight: 900;
        letter-spacing: -.02em;
        color:#0f172a;
        margin: 0;
    }
    .explore-sub{
        color: rgba(15,23,42,.62);
        margin: 6px 0 0;
        font-size: 14px;
    }

    .explore-bar{
        background: #fff;
        border: 1px solid rgba(15,23,42,.08);
        border-radius: 18px;
        padding: 14px;
        box-shadow: 0 12px 35px rgba(2,6,23,.06);
        margin-bottom: 16px;
    }

    .explore-input{
        border-radius: 14px;
        padding: 12px 14px;
        border: 1px solid rgba(15,23,42,.12);
        box-shadow: none !important;
    }
    .explore-input:focus{
        border-color: rgba(37,99,235,.55);
        box-shadow: 0 0 0 .2rem rgba(37,99,235,.12) !important;
    }

    .explore-btn{
        border-radius: 14px;
        padding: 12px 14px;
        font-weight: 800;
        letter-spacing: .2px;
        box-shadow: 0 12px 28px rgba(37,99,235,.14);
        transition: transform .15s ease, box-shadow .15s ease;
    }
    .explore-btn:hover{
        transform: translateY(-2px);

    }

    .explore-btn,
.explore-btn i{
    color: #fff !important;
}

    .sort-btn{
        border-radius: 14px;
        padding: 12px 14px;
        font-weight: 800;
        background: #2563eb
    }

    .dropdown-menu{
        border-radius: 14px;
        border: 1px solid rgba(15,23,42,.08);
        box-shadow: 0 18px 50px rgba(2,6,23,.10);
        overflow:hidden;
    }
    .dropdown-item{
        font-weight: 700;
        padding: 10px 14px;
    }
    .dropdown-item:hover{
        background: rgba(37,99,235,.08);
        color:#2563eb;
    }

    .sg-card{
        border: 0;
        border-radius: 18px;
        overflow:hidden;
        box-shadow: 0 10px 30px rgba(2,6,23,.08);
        transition: transform .18s ease, box-shadow .18s ease;
        height: 100%;
        position: relative;
        background:#fff;
    }
    .sg-card:hover{
        transform: translateY(-6px);
        box-shadow: 0 16px 45px rgba(2,6,23,.14);
    }
    .sg-thumb{
        width: 100%;
        height: 200px;
        object-fit: cover;
        display:block;
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
        display:flex;
        gap:8px;
        align-items:center;
        backdrop-filter: blur(6px);
    }

    .sg-body{
        padding: 16px 16px 18px;
        display: flex;
        flex-direction: column;
        flex: 1;
    }
    .sg-title{
        font-weight: 900;
        letter-spacing: -.01em;
        color:#0f172a;
        line-height: 1.25;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        min-height: 44px;
        margin-bottom: 10px;
    }
    .sg-meta{
        color: rgba(15,23,42,.70);
        font-size: 14px;
        display:flex;
        flex-direction:column;
        gap:8px;
    }
    .sg-meta i{
        width: 18px;
        color: rgba(37,99,235,.95);
    }
    .sg-link{
        margin-top: 12px;
        display:inline-flex;
        align-items:center;
        gap:8px;
        font-weight: 800;
        text-decoration:none;
        color:#2563eb;
    }
    .sg-link:hover{ text-decoration: none; opacity:.9; }

    /* pagination spacing */
    .pagination{
        margin-top: 18px;
        justify-content: center;
    }

    /* bikin 1 baris rapi */
.explore-searchgroup{
    align-items: stretch;
}

/* tombol icon kiri/kanan */
.explore-icon-btn{
    border-radius: 14px 0 0 14px;
    border: 1px solid rgba(15,23,42,.12);
    background: #fff;
    padding: 0 14px;
    display:flex;
    align-items:center;
    justify-content:center;
}

/* tombol kanan (X) radius kebalik */
.input-group-append .explore-icon-btn{
    border-radius: 0 14px 14px 0;
}

/* input tengah: hilangkan border kiri/kanan biar nyambung */
.explore-input-mid{
    border-left: 0;
    border-right: 0;
    border-top: 1px solid rgba(15,23,42,.12);
    border-bottom: 1px solid rgba(15,23,42,.12);
    border-radius: 0;
}

/* icon warna */
.explore-icon-btn i{
    color: rgba(15,23,42,.55);
}

/* X lebih tegas */
.explore-x{
    color:#2563eb;
    font-weight:900;
    font-size:18px;
    line-height: 1;
}

.sort-label{
    font-weight: 700;
    font-size: 14px;
    color: rgba(15,23,42,.60);
    white-space: nowrap;
}

.sort-btn{
    border-radius: 14px;
    height: 44px;
    font-weight: 800;
    padding: 0 16px;
}

/* tombol "Lihat Detail" seperti contoh */
.sg-btn{
    margin-top: 14px;
    width: 100%;
    height: 46px;
    border-radius: 14px;
    background: #2563eb;
    color: #fff !important;
    font-weight: 900;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 10px;
    box-shadow: 0 14px 30px rgba(37,99,235,.18);
    transition: transform .15s ease, box-shadow .15s ease, opacity .15s ease;
    text-decoration: none !important;
}
.sg-btn:hover{
    transform: translateY(-2px);
    box-shadow: 0 18px 40px rgba(37,99,235,.24);
    opacity: .98;
}
.sg-btn i{
    color: #fff !important;
}

</style>

<main class="explore-wrap">
    <section>
        <div class="container">
            <div class="explore-head">
                <div>
                    <h2 class="explore-title">Cari Seminar</h2>
                    <p class="explore-sub">Temukan event yang sesuai minatmu, lalu lihat detailnya.</p>
                </div>
            </div>

            <div class="explore-bar">
                <form action="{{ route('explore.search') }}" method="GET">
                    <div class="form-row align-items-center">
                        <div class="form-group col-md-6 mb-2 mb-md-0">
    <div class="input-group explore-searchgroup">
        <div class="input-group-prepend">
            <button type="submit" class="btn btn-light explore-icon-btn">
                <i class="fas fa-search"></i>
            </button>
        </div>

        <input class="form-control explore-input explore-input-mid"
               type="text"
               placeholder="Search seminar..."
               name="search"
               value="{{ request('search') }}"
               required>

        @if(request()->filled('search'))
            <div class="input-group-append">
                <a href="{{ route('explore.all') }}" class="btn btn-light explore-icon-btn">
                    <span class="explore-x">&times;</span>
                </a>
            </div>
        @endif
    </div>
</div>

                        <div class="form-group col-md-4 mb-0 d-flex align-items-center justify-content-end">
    <span class="sort-label mr-2">Urutkan berdasarkan :</span>

    <div class="dropdown">
        <button class="btn btn-outline-primary dropdown-toggle sort-btn"
                type="button"
                data-toggle="dropdown">
            @if (isset($statusDropdown))
                {{ $statusDropdown }}
            @else
                Sort
            @endif
        </button>

        <div class="dropdown-menu dropdown-menu-right">
            <a href="{{ route('explore.week') }}" class="dropdown-item">Event Terbaru</a>
            <a href="{{ route('explore.month') }}" class="dropdown-item">Event Bulan Ini</a>
            <a href="{{ route('explore.all') }}" class="dropdown-item">Semua Seminar</a>
        </div>
    </div>
</div>

                    @error('search')
                        <div class="mt-2 text-danger font-weight-bold">{{ $message }}</div>
                    @enderror
                </form>
            </div>

            <div class="row">
                @foreach($event as $e)
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="sg-card">
                            <a href="{{ route('explore.show', ['id' => $e->id]) }}" class="text-decoration-none">
                                <div class="sg-badge">
                                    <i class="fas fa-calendar-week"></i>
                                    <span>{{ \Carbon\Carbon::parse($e->tanggal_mulai)->format('M d, Y • H:i') }}</span>
                                </div>
                                <img src="{{ url('gambar/'.$e->gambar) }}" alt="{{ $e->nama }}" class="sg-thumb">
                            </a>

                            <div class="sg-body">
                                <a href="{{ route('explore.show', ['id' => $e->id]) }}" class="text-decoration-none">
                                    <div class="sg-title">{{ $e->nama }}</div>
                                </a>

                                <div class="sg-meta">
                                    <div>
                                        <i class="fas fa-map-marker-alt"></i>
                                        <span>{{ $e->lokasi_seminar }}</span>
                                    </div>
                                    <div>
                                        <i class="fas fa-clock"></i>
                                        <span>{{ \Carbon\Carbon::parse($e->tanggal_mulai)->toFormattedDateString() }}</span>
                                    </div>
                                </div>
                                <a class="sg-btn" href="{{ route('explore.show', ['id' => $e->id]) }}">
                                    Lihat Detail <i class="fas fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{ $event->links() }}
        </div>
    </section>
</main>
@endsection
