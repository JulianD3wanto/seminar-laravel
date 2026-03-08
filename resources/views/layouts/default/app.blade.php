<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Title -->
    <title>SeminarGo</title>

    <!-- Font Awe Some -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-0c38nfCMzF8w8DBI+9nTWzApOpr1z0WuyswL4y6x/2ZTtmj/Ki5TedKeUcFusC/k" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">

</head>
<body class="h-100">
    <div id="app" class="d-flex flex-column h-100">
        <!-- Navbar -->
        @include('layouts.default.nav')
        <!-- Navbar End -->

        <!-- Main Content -->
        @yield('content')
        <!-- Main Content End -->

        <!-- Footer -->
        @include('layouts.default.footer')
        <!-- Footer End -->

        <div class="sg-chatbot">
  <button class="sg-chatbot__btn" type="button" onclick="toggleSgChat()">
    <i class="fas fa-headset"></i>
  </button>

  <div class="sg-chatbot__panel" id="sgChatPanel">
    <div class="sg-chatbot__head">
      <div class="sg-chatbot__title">Butuh bantuan?</div>
      <button class="sg-chatbot__close" type="button" onclick="toggleSgChat()">×</button>
    </div>

    <div class="sg-chatbot__body">
      <div class="sg-chatbot__bubble">Pilih topik, nanti aku hubungkan ke Admin via WhatsApp.</div>

      <button class="sg-chatbot__item" type="button"
        onclick="waAdmin('Halo Admin, saya ingin tanya cara daftar seminar.')">
        Cara daftar seminar
      </button>

      <button class="sg-chatbot__item" type="button"
        onclick="waAdmin('Halo Admin, saya ingin tanya soal pembayaran/biaya seminar.')">
        Pembayaran / biaya
      </button>

      <button class="sg-chatbot__item" type="button"
        onclick="waAdmin('Halo Admin, saya butuh bantuan terkait tiket/sertifikat.')">
        Tiket / sertifikat
      </button>

      <button class="sg-chatbot__item sg-chatbot__item--primary" type="button"
        onclick="waAdmin('Halo Admin, saya butuh bantuan. Ini halaman saya: ' + window.location.href)">
        Chat Admin sekarang
      </button>
    </div>
  </div>
</div>

    </div>

    <!-- JavaScript -->
    <!-- Jquery, Popper, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{asset('js/bootstrap.js')}}"></script>

    <script>
  const WA_ADMIN = "6281234567890"; // ganti nomor admin

  function toggleSgChat(){
    document.getElementById('sgChatPanel').classList.toggle('is-open');
  }

  function waAdmin(message){
    const url = "https://wa.me/" + WA_ADMIN + "?text=" + encodeURIComponent(message);
    window.open(url, "_blank", "noopener");
  }
</script>
</body>
</html>
