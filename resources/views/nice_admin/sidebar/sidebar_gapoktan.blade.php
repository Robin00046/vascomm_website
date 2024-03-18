<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link {{ Request::is('dashboard') ? '' :'collapsed' }}"  href="{{ route('dashboard') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->
    <li class="nav-item">
      <a class="nav-link {{ Request::is('laporan') ? '' :'collapsed' }}" href="{{ route('laporan') }}">
      {{-- <a class="nav-link" href="#"> --}}
        <i class="bi bi-clipboard2"></i>
        <span>Laporan</span>
      </a>
    </li>
  </ul>

</aside><!-- End Sidebar-->