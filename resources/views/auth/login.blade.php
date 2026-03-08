@extends('layouts.auth.app')

@section('content')
<style>
    .auth-wrap{
        min-height: 100vh;
        display:flex;
        align-items:center;
        padding: 40px 0;
        background:
            radial-gradient(900px 380px at 10% 20%, rgba(37,99,235,.18), transparent 60%),
            radial-gradient(900px 380px at 90% 20%, rgba(99,102,241,.14), transparent 60%),
            #f6f8fc;
    }

    .auth-card{
        border: 0;
        border-radius: 22px;
        overflow: hidden;
        box-shadow: 0 20px 60px rgba(2,6,23,.12);
    }

    .auth-left{
        position: relative;
        color: #fff;
        padding: 32px;
        min-height: 520px;
        background:
            linear-gradient(135deg, rgba(15,23,42,.85) 0%, rgba(15,23,42,.55) 60%, rgba(15,23,42,.85) 100%),
            url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?auto=format&fit=crop&w=1200&q=60');
        background-size: cover;
        background-position: center;
    }

    .auth-left .brand{
        display:flex;
        align-items:center;
        gap:10px;
        font-weight:800;
        letter-spacing:-.02em;
        margin-bottom: 18px;
    }

    .auth-left .brand-badge{
        width: 36px; height: 36px;
        border-radius: 12px;
        background: rgba(37,99,235,.95);
        display:flex;
        align-items:center;
        justify-content:center;
        font-weight:900;
    }

    .auth-left h2{
        font-weight: 900;
        letter-spacing: -.02em;
        margin: 8px 0 10px;
         color: rgba(255,255,255,.82);
    }

    .auth-left p{
        color: rgba(255,255,255,.82);
        max-width: 360px;
        margin-bottom: 0;
    }

    .auth-right{
        padding: 34px 30px;
        background: #fff;
    }

    .auth-title{
        font-weight: 900;
        letter-spacing:-.02em;
        color:#0f172a;
        margin-bottom: 6px;
    }

    .auth-subtitle{
        color: rgba(15,23,42,.60);
        margin-bottom: 18px;
        font-size: 14px;
    }

    .auth-right .form-control{
        border-radius: 14px;
        padding: 12px 14px;
        border: 1px solid rgba(15,23,42,.12);
        box-shadow: none;
    }
    .auth-right .form-control:focus{
        border-color: rgba(37,99,235,.55);
        box-shadow: 0 0 0 .2rem rgba(37,99,235,.15);
    }

    .auth-btn{
    border-radius: 16px;
    padding: 14px 16px;
    font-weight: 800;
    letter-spacing: .3px;
    position: relative;
    overflow: hidden;
    background: rgba(37,99,235,.95);
    /* tetap aman: tidak mengubah background tombol */
    transition: transform .18s ease, box-shadow .18s ease;

}

/* Hover: naik sedikit + shadow lebih tebal */
.auth-btn:hover{
    transform: translateY(-3px);
    box-shadow: 0 18px 45px rgba(2,6,23,.22);
    background: transparent;
    color : #2563eb;
}

/* Klik: balik turun */
.auth-btn:active{
    transform: translateY(0);
    box-shadow: 0 10px 24px rgba(2,6,23,.18);
}

/* Fokus: ring halus */
.auth-btn:focus{
    box-shadow: 0 0 0 .2rem rgba(37,99,235,.25), 0 12px 28px rgba(2,6,23,.16);
}

/* Shine effect halus (tidak mengubah warna utama) */
.auth-btn::after{
    content:"";
    position:absolute;
    top:0;
    left:-120%;
    width:60%;
    height:100%;
    background: linear-gradient(120deg, transparent, rgba(255,255,255,.25), transparent);
    transition: left .45s ease;
}

.auth-btn:hover::after{
    left:140%;
}

    .auth-links a{
        text-decoration: none;
        font-weight: 700;
        color: #2563eb;
    }
    .auth-links a:hover{ text-decoration: underline; }

    /* responsif: kiri jadi di atas */
    @media (max-width: 767.98px){
        .auth-left{ min-height: 260px; }
        .auth-right{ padding: 26px 20px; }
    }


.auth-links{
  margin-top: 10px;
}

/* wrapper link (samakan ukuran 2 tombol) */
.auth-links .auth-link{
  display: flex;                 /* ganti inline-flex -> flex biar stabil */
  align-items: center;
  justify-content: center;
  gap: 10px;

  width: 100%;
  height: 46px;                  /* kunci tinggi supaya tidak beda */
  padding: 0 14px;               /* jangan pakai padding atas-bawah besar */
  border-radius: 14px;

  font-weight: 800;
  text-decoration: none;
  white-space: nowrap;           /* jangan turun baris */
  overflow: hidden;              /* untuk ellipsis */
  text-overflow: ellipsis;

  transition: transform .15s ease, box-shadow .15s ease, background .15s ease, border-color .15s ease;
}

/* ukuran icon */
.auth-links .auth-link .auth-link--primary i{
  font-size: 14px;
  flex: 0 0 auto;
  color: rgba(255,255,255,.82);

}

/* Forgot: outline */
.auth-links .auth-link--ghost{
  color: #2563eb;
  background: rgba(37,99,235,.06);
  border: 1px solid rgba(37,99,235,.18);
}
.auth-links .auth-link--ghost:hover{
  background: rgba(37,99,235,.10);
  border-color: rgba(37,99,235,.28);
  transform: translateY(-2px);
  box-shadow: 0 10px 24px rgba(37,99,235,.14);
}

/* Create: solid (samakan feel + warna) */
.auth-links .auth-link--primary{
  color: #fff;
  background: #2563eb;
  border: 1px solid #2563eb;
  box-shadow: 0 12px 28px rgba(37,99,235,.18);
}
.auth-links .auth-link--primary:hover{
  background: #1d4ed8;
  border-color: #1d4ed8;
  transform: translateY(-2px);
  box-shadow: 0 16px 40px rgba(37,99,235,.24);
}

/* responsive spacing */
.auth-links .row{
  margin-left: -6px;
  margin-right: -6px;
}
.auth-links [class*="col-"]{
  padding-left: 6px;
  padding-right: 6px;
}

.auth-links .auth-link,
.auth-links .auth-link:hover,
.auth-links .auth-link:focus{
    text-decoration: none !important;
}

</style>

<div class="auth-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="card auth-card">
                    <div class="row no-gutters">
                        {{-- KIRI: GAMBAR --}}
                        <div class="col-md-5">
                            <div class="auth-left h-100">
                                <div class="brand">
                                    <div class="brand-badge">SG</div>
                                    <div>SeminarGO</div>
                                </div>

                                <h2>Welcome Back 👋</h2>
                                <p>
                                    Login untuk melihat event terbaru, kelola pendaftaran, dan akses tiket/sertifikat.
                                </p>
                            </div>
                        </div>

                        {{-- KANAN: FORM --}}
                        <div class="col-md-7">
                            <div class="auth-right">
                                <div class="mb-3">
                                    <div class="auth-title">Login</div>
                                    <div class="auth-subtitle">Masukkan email dan password kamu untuk masuk.</div>
                                </div>

                                <form method="POST" action="{{ route('login') }}">
                                    @csrf

                                    <div class="form-group mb-3">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}" required
                                            placeholder="Enter Your Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password" required
                                            placeholder="Enter Your Password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                                {{ old('remember') ? 'checked' : '' }}>
                                            <label class="form-check-label" for="remember">Remember Me</label>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <button type="submit" class="btn btn-primary btn-block auth-btn w-100">
                                            Login
                                        </button>
                                    </div>

                                    <hr>

                                    <div class="auth-links">
    <div class="row">
        @if (Route::has('password.request'))
            <div class="col-12 col-md-6 mb-2 mb-md-0">
                <a class="auth-link auth-link--ghost" href="{{ route('password.request') }}">
                    <i class="fas fa-unlock-alt"></i>
                    {{ __('Forgot Password?') }}
                </a>
            </div>
        @endif

        <div class="col-12 col-md-6">
            <a class="auth-link auth-link--primary" href="{{ route('register') }}">
                <i class="fas fa-user-plus"></i>
                Create an Account!
            </a>
        </div>
    </div>
</div>
                                </form>
                            </div>
                        </div>
                    </div> {{-- row --}}
                </div> {{-- card --}}
            </div>
        </div>
    </div>
</div>
@endsection
