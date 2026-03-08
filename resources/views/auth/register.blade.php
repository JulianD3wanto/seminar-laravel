@extends('layouts.auth.app')

@section('content')

<style>
/* Background */
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

/* Card */
.auth-card{
    border: 0;
    border-radius: 22px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(2,6,23,.12);
}

/* Left Image */
.auth-left{
    position: relative;
    color: #fff;
    padding: 32px;
    min-height: 560px;
    background:
        linear-gradient(135deg, rgba(15,23,42,.75) 0%, rgba(15,23,42,.45) 60%, rgba(15,23,42,.75) 100%),
        url('https://images.unsplash.com/photo-1552664730-d307ca884978?auto=format&fit=crop&w=1200&q=60');
    background-size: cover;
    background-position: center;
}

.auth-left h2{
    font-weight: 900;
    margin-top: 10px;
    color: rgba(255,255,255,.85);
}

.auth-left p{
    color: rgba(255,255,255,.85);
    max-width: 360px;
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


/* Right Form */
.auth-right{
    padding: 34px 30px;
    background: #fff;
}

.auth-title{
    font-weight: 900;
    margin-bottom: 5px;
}

.auth-subtitle{
    color: rgba(15,23,42,.60);
    font-size: 14px;
    margin-bottom: 18px;
}

/* Input Styling */
.auth-right .form-control{
    border-radius: 14px;
    padding: 12px 14px;
    border: 1px solid rgba(15,23,42,.12);
}

.auth-right .form-control:focus{
    border-color: rgba(37,99,235,.55);
    box-shadow: 0 0 0 .2rem rgba(37,99,235,.15);
}

/* Button */
.auth-btn{
    border-radius: 16px;
    padding: 14px 16px;
    font-weight: 800;
    letter-spacing: .3px;
    transition: all .18s ease;
    box-shadow: 0 12px 28px rgba(2,6,23,.16);
    background: #2563eb;
}

.auth-btn:hover{
    transform: translateY(-3px);
    box-shadow: 0 18px 45px rgba(2,6,23,.22);
    background: transparent;
    color: #2563eb;
}

.auth-btn:active{
    transform: translateY(0);
}

/* Links */
.auth-links a{
    text-decoration: none;
    font-weight: 700;
    color: #2563eb;
}

.auth-links a:hover{
    text-decoration: underline;
}

.auth-bottom{
    text-align:center;
    margin-top: 6px;
    color: rgba(15,23,42,.60);
    font-weight: 600;
    font-size: 14px;
}

.auth-bottom a{
    display: inline-flex;
    align-items: center;
    justify-content: center;
    gap: 8px;

    padding: 10px 18px;
    border-radius: 14px;                 /* bukan pill bulat banget */
    background: #2563eb;                 /* solid biar tegas */
    color: #fff !important;
    text-decoration: none;
    font-weight: 800;
    line-height: 1;
    border: 1px solid #2563eb;

    box-shadow: 0 12px 28px rgba(37,99,235,.22);
    transition: transform .18s ease, box-shadow .18s ease, background .18s ease, border-color .18s ease;
}

.auth-bottom a:hover{
    background: #1d4ed8;
    border-color: #1d4ed8;
    transform: translateY(-2px);
    box-shadow: 0 18px 45px rgba(37,99,235,.28);
}

.auth-bottom a:active{
    transform: translateY(0);
    box-shadow: 0 10px 24px rgba(37,99,235,.22);
}

.auth-bottom a:focus{
    box-shadow: 0 0 0 .2rem rgba(37,99,235,.25), 0 12px 28px rgba(37,99,235,.22);
}

.auth-login-btn i{

    color: #fff !important;
}


/* Responsive */
@media (max-width: 767.98px){
    .auth-left{
        min-height: 260px;
    }
}
</style>

<div class="auth-wrap">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10 col-xl-9">
                <div class="card auth-card">
                    <div class="row g-0">

                        {{-- LEFT SIDE --}}
                        <div class="col-md-5">
    <div class="auth-left h-100">
        <div class="brand">
            <div class="brand-badge">SG</div>
            <div>SeminarGO</div>
        </div>

        <h2>Join SeminarGO</h2>
        <p>
            Buat akun untuk mendaftar seminar, melihat tiket, dan mengelola event favoritmu.
        </p>
    </div>
</div>

                        {{-- RIGHT SIDE --}}
                        <div class="col-md-7">
                            <div class="auth-right">
                                <div class="auth-title">Create an Account</div>
                                <div class="auth-subtitle">
                                    Isi data berikut untuk membuat akun baru.
                                </div>

                                <form method="POST" action="{{ route('register') }}">
                                    @csrf

                                    <div class="mb-3">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror"
                                            name="name" value="{{ old('name') }}"
                                            required placeholder="Full Name">
                                        @error('name')
                                            <span class="invalid-feedback d-block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            name="email" value="{{ old('email') }}"
                                            required placeholder="Email Address">
                                        @error('email')
                                            <span class="invalid-feedback d-block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            name="password"
                                            required placeholder="Password">
                                        @error('password')
                                            <span class="invalid-feedback d-block">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <input id="password-confirm" type="password"
                                            class="form-control"
                                            name="password_confirmation"
                                            required placeholder="Confirm Password">
                                    </div>

                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-primary w-100 auth-btn">
                                            Register
                                        </button>
                                    </div>

                                    <hr>

                                    <div class="auth-bottom">
                                Sudah punya akun?
                                <a href="{{ route('login') }}" class="auth-login-btn">
                                <i class="fas fa-right-to-bracket"></i>
                                Login
                            </a>
                            </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
