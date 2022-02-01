<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('favicon.ico') }}" alt="Logo Monkermart">
        </div>
        <div class="sidebar-brand-text mx-3 text-sm">
            <p class="text-capitalize mt-3" style="font-weight: lighter">{{ Auth::user()->name }}</p>
        </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{ route('dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Product
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a href="{{ route('product.index') }}" class="nav-link">
            <i class="fas fa-fw fa-boxes"></i>
            <span>Daftar Product</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-fw fa-images"></i>
            <span>Gambar Product</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Transaksi
    </div>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Daftar Transaksi</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-fw fa-dollar-sign"></i>
            <span>Daftar Piutang</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Pengguna
    </div>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-fw fa-users"></i>
            <span>Daftar Konsumen</span>
        </a>
    </li>

    <li class="nav-item">
        <a href="#" class="nav-link">
            <i class="fas fa-fw fa-users"></i>
            <span>Daftar Pengguna</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <li class="nav-item"><a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Logout</span>
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </li>

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>


</ul>
<!-- End of Sidebar -->
