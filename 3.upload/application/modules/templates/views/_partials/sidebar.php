<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
      <div class="sidebar-brand-icon">
        <i class="fas fa-archive"></i>
      </div>
      <div class="sidebar-brand-text mx-3">Produk</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item <?php if ($this->uri->segment(1) == "dashboard") {
                          echo "active";
                        } ?>">
      <a class="nav-link " href="<?= base_url('dashboard') ?>">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
      Barang
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php if ($this->uri->segment(1) == "kategori") {
                          echo "active";
                        } ?>">
      <a class="nav-link" href="<?= base_url('kategori') ?>">
        <i class="fab fa-fw fa-buffer"></i>
        <span>Kategori</span></a>
    </li>

    <!-- Nav Item - Tables -->
    <li class="nav-item <?php if ($this->uri->segment(1) == "barang") {
                          echo "active";
                        } ?>">
      <a class="nav-link" href="<?= base_url('barang') ?>">
        <i class="fas fa-fw fa-table"></i>
        <span>Produk</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      User
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php if ($this->uri->segment(1) == "pelanggan") {
                          echo "active";
                        } ?>">
      <a class="nav-link" href="<?= base_url('pelanggan') ?>">
        <i class="fas fa-fw fa-users"></i>
        <span>Pelanggan</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <!-- Heading -->
    <div class="sidebar-heading">
      Pesanan
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item <?php if ($this->uri->segment(1) == "order") {
                          echo "active";
                        } ?>">
      <a class="nav-link" href="<?= base_url('order') ?>">
        <i class="fas fa-fw fa-clipboard-list"></i>
        <span>Order</span></a>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
      <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

  </ul>
  <!-- End of Sidebar -->