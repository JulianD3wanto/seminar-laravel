<style>
    /* Navbar modern */
.sg-navbar{
  background: rgba(255,255,255,.92);
  backdrop-filter: blur(10px);
  border-bottom: 1px solid rgba(15,23,42,.08);
}

.sg-navbar .navbar-brand{
  display:flex;
  align-items:center;
  gap:10px;
  font-weight:900;
  letter-spacing:-.02em;
}

.sg-logo-badge{
  width: 36px;
  height: 36px;
  border-radius: 12px;
  background: #2563eb;
  display:flex;
  align-items:center;
  justify-content:center;
  color:#fff;
  font-weight:900;
  box-shadow: 0 10px 24px rgba(37,99,235,.20);
}

.sg-navbar .nav-link{
  color: rgba(15,23,42,.75) !important;
  font-weight: 700;
  padding: .55rem .85rem !important;
  border-radius: 12px;
  transition: .15s ease;
}

.sg-navbar .nav-link:hover{
  background: rgba(37,99,235,.08);
  color: #2563eb !important;
}

.sg-navbar .nav-link.active{
  background: rgba(37,99,235,.10);
  color: #2563eb !important;
}

/* tombol login */
.sg-btn-login{
  background: #2563eb;
  color: #fff !important;
  padding: .55rem 1rem !important;
  border-radius: 14px;
  box-shadow: 0 12px 28px rgba(37,99,235,.18);
}

.sg-btn-login:hover{
  background: #1d4ed8;
  box-shadow: 0 16px 40px rgba(37,99,235,.24);
}

.notif-bell {
  color: #0d6efd; /* biru bootstrap */
}

/* kalau mau biru tua seperti tombol kamu */
.notif-bell {
  color: #0b5ed7;
}

</style>


<nav class="navbar navbar-expand-lg navbar-light sg-navbar">
    <div class="container">
        {{-- BRAND: Logo SG + SeminarGO --}}
        <a href="{{ route('home') }}" class="navbar-brand">
            <span class="sg-logo-badge">SG</span>
            <span>SeminarGO</span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            {{-- Left menu --}}
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/explore" class="nav-link {{ request()->is('explore*') ? 'active' : '' }}">
                        Seminar
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('speaker.create') }}" class="nav-link {{ request()->is('menjadi-pembicara') ? 'active' : '' }}">
                        Menjadi Pembicara
                    </a>
                </li>
            </ul>

            {{-- Right menu --}}
            <ul class="navbar-nav ml-auto align-items-lg-center">
                @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link sg-btn-login">
                            Masuk
                        </a>
                    </li>
                @endguest

                @auth
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{ route('dashboard') }}">Go To Dashboard</a>

                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endauth

                    @auth
            <li class="nav-item dropdown">
                <a class="nav-link position-relative" href="#" id="notifDropdown" role="button" data-toggle="dropdown">
                    <i class="fas fa-bell notif-bell"></i>

                    @php $unread = auth()->user()->unreadNotifications()->count(); @endphp
                    @if($unread > 0)
                        <span class="badge badge-danger" style="position:absolute; top:6px; right:2px; font-size:10px;">
                            {{ $unread }}
                        </span>
                    @endif
                </a>

                <div class="dropdown-menu dropdown-menu-right" style="min-width:320px;">
                    <h6 class="dropdown-header">Notifikasi</h6>

                    @forelse(auth()->user()->notifications->take(8) as $notif)
                        <a class="dropdown-item d-flex justify-content-between align-items-start"
                        href="{{ $notif->data['certificate_url'] ?? '#' }}"
                        onclick="event.preventDefault(); document.getElementById('read-{{ $notif->id }}').submit();">
                            <div style="white-space:normal;">
                                <div style="font-weight:700;">
                                    {{ $notif->data['event_name'] ?? 'Sertifikat' }}
                                </div>
                                <div style="font-size:12px; opacity:.75;">
                                    {{ $notif->data['message'] ?? 'Ada update baru.' }}
                                </div>
                            </div>

                            @if(is_null($notif->read_at))
                                <span class="ml-2" style="width:8px; height:8px; border-radius:50%; background:#2563eb; display:inline-block;"></span>
                            @endif
                        </a>

                        <form id="read-{{ $notif->id }}" method="POST" action="{{ route('notif.read', $notif->id) }}" style="display:none;">
                            @csrf
                        </form>
                    @empty
                        <div class="dropdown-item text-muted">Belum ada notifikasi.</div>
                    @endforelse

                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-center" href="{{ route('notif.index') }}">Lihat semua</a>
                </div>
            </li>
            @endauth

            </ul>
        </div>
    </div>
</nav>
