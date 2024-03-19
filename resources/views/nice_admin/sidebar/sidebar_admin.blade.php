<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link {{ Request::is('dashboard') ? '' :'collapsed' }}"  href="{{ route('dashboard') }}">
        {{-- <a class="nav-link" href="#"> --}}
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      <li class="nav-item">
        {{-- <a class="nav-link" href="#"> --}}
          <a class="nav-link {{ Request::is('customers') ? '' :'collapsed' }}"  href="{{ route('customers.index') }}">
            <i class="bi bi-people"></i>
          <span>Management User</span>
        </a>
      </li>
      <li class="nav-item">
        {{-- <a class="nav-link" href="#"> --}}
          <a class="nav-link {{ Request::is('products') ? '' :'collapsed' }}"  href="{{ route('products.index') }}">
          <i class="bi bi-table"></i>
          <span>Management Product</span>
        </a>
      </li>
    </ul>

  </aside><!-- End Sidebar-->