<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-stethoscope"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SI Klinik </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
        <a class="nav-link" href="/">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Dokter
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ (request()->is('dokter*')) ? 'active' : '' }}">
        <a class="nav-link" href="/dokter">
            <i class="fas fa-fw fa-user-md"></i>
            <span>Dokter</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Menu Pasien
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ (request()->is('pasien*')) ? 'active' : '' }}">
        <a class="nav-link" href="/pasien">
            <i class="fas fa-fw fa-users"></i>
            <span>Pasien</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ (request()->is('rekam*')) ? 'active' : '' }}">
        <a class="nav-link" href="/rekam">
            <i class="fas fa-list-alt "></i>
            <span>Rekam Medis</span></a>
    </li>

    
    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ (request()->is('ruang*')) ? 'active' : '' }}">
        <a class="nav-link" href="/ruang">
            <i class="fas fa-fw fa-bed"></i>
            <span>Ruang</span></a>
    </li>

    <!-- Nav Item - Charts -->
    <li class="nav-item {{ (request()->is('obat*')) ? 'active' : '' }}">
        <a class="nav-link" href="/obat">
            <i class="fas fa-fw fa-medkit"></i>
            <span>Obat</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="/laporan">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Laporan</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>