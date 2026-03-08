<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Seminar <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item active">
    <a class="nav-link" href="{{ url('explore') }}">
      <i class="fas fa-home"></i>
      <span>Browse Seminar</span></a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <!-- Divider -->


<?php if(Auth::user()->id == 1): ?>
  <hr class="sidebar-divider">
  <!-- Event -->
  <div class="sidebar-heading">
    Event
  </div>
  <li class="nav-item">
    <a class="nav-link" href="{{action('EventController@createEvent')}}">
      <i class="fas fa-pencil-alt"></i>
      <span>Create Seminar</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{action('EventController@index')}}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>My Seminar</span></a>
  </li>
  <li class="nav-item">
  <a href="{{ route('admin.speaker.index') }}" class="nav-link">
    <i class="fas fa-microphone"></i> Pengajuan Pembicara
  </a>
</li>
  <!-- End Event -->
<?php endif ?>
  <!-- Divider -->
  <hr class="sidebar-divider" hidden>

  <!-- Ticket -->
  <div class="sidebar-heading" hidden>
    Ticket
  </div>
  <li class="nav-item">
    <a class="nav-link" hidden href="{{route('dashboard.ticket')}}">
      <i class="fas fa-fw fa-chart-area"></i>
      <span>My Ticket</span></a>
  </li>
  <!-- End Ticket -->

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Account -->
  <div class="sidebar-heading">
    Account
  </div>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('profile') }}">
      <i class="fas fa-user-circle"></i>
      <span>My Account</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('password') }}">
      <i class="fas fa-key"></i>
      <span>Password</span></a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
      <i class="fas fa-sign-out-alt"></i>
      <span>Logout</span></a>
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
      </form>
  </li>
  <!-- End Account -->

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
<!-- End of Sidebar -->
