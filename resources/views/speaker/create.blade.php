@extends('layouts.default.app')

@section('content')
<style>


    .speaker-wrap{
        padding: 40px 0 70px;
        background:
            radial-gradient(900px 380px at 10% 0%, rgba(37,99,235,.10), transparent 60%),
            radial-gradient(900px 380px at 90% 0%, rgba(99,102,241,.08), transparent 60%),
            #ffffff;
    }

    .speaker-hero{
        text-align:center;
        margin-bottom: 26px;
    }
    .speaker-pill{
        display:inline-flex;
        align-items:center;
        gap:8px;
        padding: 7px 14px;
        border-radius: 999px;
        font-size: 12px;
        font-weight: 900;
        background: rgba(37,99,235,.10);
        color:#2563eb;
        border: 1px solid rgba(37,99,235,.18);
        margin-bottom: 12px;
    }
    .speaker-title{
        font-weight: 900;
        letter-spacing: -.02em;
        color:#0f172a;
        margin: 0 0 8px;
        line-height: 1.15;
    }
    .speaker-sub{
        max-width: 860px;
        margin: 0 auto;
        color: rgba(15,23,42,.62);
        font-size: 14px;
        line-height: 1.7;
    }

    .speaker-card{
        background:#fff;
        border: 1px solid rgba(15,23,42,.08);
        border-radius: 22px;
        box-shadow: 0 18px 60px rgba(2,6,23,.10);
        padding: 26px;
        max-width: 980px;
        margin: 0 auto;
    }

    .sg-label{
        font-weight: 900;
        color:#0f172a;
        margin-bottom: 8px;
        font-size: 14px;
    }
    .sg-label .req{ color:#ef4444; }

    .sg-input{
    height: 52px;
    border-radius: 12px;
    border: 1.5px solid rgba(37,99,235,.55); /* biru */
    box-shadow: none !important;
    padding: 0 16px;
}

.sg-input:focus{
    border-color: rgba(37,99,235,1); /* biru */
    box-shadow: 0 0 0 .2rem rgba(37,99,235,.15) !important; /* glow biru */
}
    textarea.sg-input{
        height: auto;
        padding: 14px 16px;
        min-height: 120px;
        resize: vertical;
    }

    .sg-help{
        color: rgba(15,23,42,.55);
        font-size: 12px;
        margin-top: 6px;
    }

    .sg-radio-wrap{
        display:flex;
        gap:18px;
        align-items:center;
        flex-wrap: wrap;
        padding-top: 6px;
    }
    .sg-radio{
        display:flex;
        align-items:center;
        gap:8px;
        font-weight: 700;
        color: rgba(15,23,42,.78);
    }

    .captcha-box{
        width: 304px;
        height: 78px;
        border-radius: 6px;
        border: 1px solid rgba(15,23,42,.10);
        background: #f8fafc;
        display:flex;
        align-items:center;
        justify-content:center;
        color: rgba(15,23,42,.55);
        font-weight: 800;
        font-size: 12px;
    }

    .btn-send{
    height: 54px;
    border-radius: 12px;
    background: #2563eb;            /* biru */
    border: 0;
    font-weight: 900;
    letter-spacing: .08em;
    color:#ffffff;                   /* teks putih */
    padding: 0 28px;
    box-shadow: 0 16px 40px rgba(37,99,235,.22);  /* shadow biru */
    transition: transform .15s ease, box-shadow .15s ease, opacity .15s ease;
    text-transform: uppercase;
}

.btn-send:hover{
    transform: translateY(-2px);
    background: #1d4ed8;            /* biru lebih gelap */
    box-shadow: 0 22px 55px rgba(37,99,235,.30);
    opacity: .98;
}

    .form-row-gap{ margin-bottom: 22px; }

    @media (max-width: 575.98px){
        .speaker-card{ padding: 18px; }
        .captcha-box{ width: 100%; }
        .btn-send{ width: 100%; }
    }
</style>

<main class="speaker-wrap">
    <div class="container">

        <div class="speaker-hero">
            <span class="speaker-pill">🚀 Ayo Berbagi Ilmu!</span>
            <h1 class="speaker-title">Form Menjadi Pembicara<br>SeminarGO</h1>
            <p class="speaker-sub">
                Sebarkan pengetahuan dan wawasan di bidang yang kamu tekuni dengan menjadi pembicara.
                Dapatkan sertifikat dan jadi expert bersama SeminarGO!
            </p>
        </div>

        <div class="speaker-card">

            @if(session('success'))
  <div class="alert alert-success" style="border-radius:12px; font-weight:800;">
    {{ session('success') }}
  </div>
@endif

@if ($errors->any())
  <div class="alert alert-danger" style="border-radius:12px; font-weight:800;">
    <ul style="margin:0; padding-left:18px;">
      @foreach ($errors->all() as $err)
        <li>{{ $err }}</li>
      @endforeach
    </ul>
  </div>
@endif

            <form id="speakerForm" action="{{ route('speaker.store') }}" method="POST">
                @csrf
                <input type="hidden" name="recaptcha_token" id="recaptcha_token">
                <div class="form-row-gap">
                    <div class="sg-label">Nama Lengkap <span class="req">*</span></div>
                    <input type="text" name="nama" class="form-control sg-input" placeholder="Ketik nama lengkap Anda" value="{{ old('nama') }}" required>
                    @error('nama') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                </div>

                <div class="form-row-gap">
                    <div class="sg-label">Email <span class="req">*</span></div>
                    <input type="email" name="email" class="form-control sg-input" placeholder="Ketik alamat email Anda" value="{{ old('email') }}" required>
                    @error('email') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                </div>

                <div class="form-row-gap">
                    <div class="sg-label">Nomor HP (Whatsapp) <span class="req">*</span></div>
                    <input type="text" name="whatsapp" class="form-control sg-input" placeholder="Nomor WA yang bisa dihubungi" value="{{ old('whatsapp') }}" required>
                    @error('whatsapp') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                </div>

                <div class="form-row-gap">
                    <div class="form-row">
                        <div class="form-group col-md-6 mb-3 mb-md-0">
                            <div class="sg-label">Nama Perusahaan <span class="req">*</span></div>
                            <input type="text" name="perusahaan" class="form-control sg-input" placeholder="Ketik nama perusahaan Anda" value="{{ old('perusahaan') }}" required>
                            @error('perusahaan') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                        </div>
                        <div class="form-group col-md-6 mb-0">
                            <div class="sg-label">Website Perusahaan/Bisnis (jika ada)</div>
                            <input type="text" name="website" class="form-control sg-input" placeholder="Link website perusahaan/bisnis Anda" value="{{ old('website') }}">
                            @error('website') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                        </div>
                    </div>
                </div>

                <div class="form-row-gap">
                    <div class="sg-label">Sosial Media <span class="req">*</span></div>
                    <input type="text" name="sosmed" class="form-control sg-input" placeholder="Mohon masukkan link URL salah satu sosial media Anda" value="{{ old('sosmed') }}" required>
                    @error('sosmed') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                </div>

                <div class="form-row-gap">
                    <div class="sg-label">Pengalaman bekerja di bidang yang bersangkutan <span class="req">*</span></div>
                    <textarea name="pengalaman" class="form-control sg-input" placeholder="Ceritakan pengalaman singkat Anda bekerja di bidang yang bersangkutan" required>{{ old('pengalaman') }}</textarea>
                    @error('pengalaman') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                </div>

                <div class="form-row-gap">
                    <div class="sg-label">Apakah Anda pernah menjadi pembicara sebelumnya? <span class="req">*</span></div>
                    <div class="sg-radio-wrap">
                        <label class="sg-radio">
                            <input type="radio" name="pernah" value="pernah" {{ old('pernah') == 'pernah' ? 'checked' : '' }} required>
                            Pernah menjadi pembicara
                        </label>
                        <label class="sg-radio">
                            <input type="radio" name="pernah" value="tidak" {{ old('pernah') == 'tidak' ? 'checked' : '' }} required>
                            Tidak pernah menjadi pembicara
                        </label>
                    </div>
                    @error('pernah') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                </div>

                <div class="form-row-gap">
                    <div class="sg-label">Jika ya, sertakan keterangan webinar sebelumnya <span class="req">*</span></div>
                    <input type="text" name="keterangan_webinar" class="form-control sg-input" placeholder="Mohon masukkan keterangan webinar sebelumnya" value="{{ old('keterangan_webinar') }}" required>
                    @error('keterangan_webinar') <div class="text-danger mt-2 font-weight-bold">{{ $message }}</div> @enderror
                </div>

                <div class="d-flex align-items-center justify-content-between flex-wrap" style="gap:14px;">
                    <button type="submit" class="btn-send">KIRIM FORM</button>
                </div>
            </form>
        </div>

    </div>
</main>

<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.site_key') }}"></script>
<script>
document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("speakerForm");
  const tokenInput = document.getElementById("recaptcha_token");
  if (!form || !tokenInput || !window.grecaptcha) return;

  let submitting = false;

  function getToken() {
    return new Promise((resolve) => {
      grecaptcha.ready(function () {
        grecaptcha.execute("{{ config('services.recaptcha.site_key') }}", { action: "speaker_form" })
          .then(function (token) {
            tokenInput.value = token;
            resolve(token);
          });
      });
    });
  }

  // isi token pertama kali
  getToken();

  form.addEventListener("submit", async function (e) {
    if (submitting) return;       // cegah loop
    e.preventDefault();
    submitting = true;

    await getToken();             // refresh token pas submit
    form.submit();                // submit beneran
  });
});
</script>

@endsection
