<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        {{-- <a class="nav-link {{ Request::is('dashboard') ? '' :'collapsed' }}"  href="{{ route('dashboard') }}"> --}}
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          {{-- <a class="nav-link {{ Request::is('user') ? '' :'collapsed' }}"  href="{{ route('user.index') }}"> --}}
            <i class="bi bi-people"></i>
          <span>Data User</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
          {{-- <a class="nav-link {{ Request::is('training') ? '' :'collapsed' }}"  href="{{ route('training.index') }}"> --}}
          <i class="bi bi-table"></i>
          <span>Data Training</span>
        </a>
      </li>
      <li class="nav-item">
        {{-- <a class="nav-link {{ Request::is('prediksi') ? '' :'collapsed' }}" href="{{ route('prediksi.index') }}"> --}}
        <a class="nav-link" href="#">
          <i class="bi bi-table"></i>
          <span>Data Prediksi</span>
        </a>
      </li>
      <li class="nav-item">
        {{-- <a class="nav-link {{ Request::is('hasil') ? '' :'collapsed' }}" href="{{ route('hasil.index') }}"> --}}
        <a class="nav-link" href="#">
          <i class="bi bi-table"></i>
          <span>Hasil</span>
        </a>
      </li>
      <li class="nav-item">
        {{-- <a class="nav-link {{ Request::is('laporan') ? '' :'collapsed' }}" href="{{ route('laporan') }}"> --}}
        <a class="nav-link" href="#">
          <i class="bi bi-clipboard2"></i>
          <span>Laporan</span>
        </a>
      </li>


    </ul>

  </aside><!-- End Sidebar-->