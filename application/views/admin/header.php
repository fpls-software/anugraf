<?php 
	foreach($jmlpelanggan as $jml_pelanggan) {}
	foreach($jmltransaksi as $jml_transaksi) {}
	foreach($jmlprofit as $jml_profit) {}
?>
<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <a class="navbar-brand pt-0" href="<?php echo base_url("index.php/admin/"); ?>">
        ANUGRAF PS
      </a>
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo base_url(); ?>/assets/img/theme/team-1-800x800.jpg
">
              </span>
            </div>
          </a>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                ANUGRAF PS
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url("index.php/admin/"); ?>"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url("index.php/admin/suplier"); ?>">
              <i class="ni ni-bullet-list-67 text-red"></i> Suplier
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url("index.php/admin/produk"); ?>">
              <i class="ni ni-bullet-list-67 text-red"></i> Produk
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url("index.php/admin/pelanggan"); ?>">
              <i class="ni ni-bullet-list-67 text-red"></i> Pelanggan
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link " href="<?php echo base_url("index.php/admin/transaksi"); ?>">
              <i class="ni ni-planet text-orange"></i> Transaksi
            </a>
          </li>
        </ul>
        <!-- Divider -->
        <hr class="my-3">
        <!-- Heading -->
        <h6 class="navbar-heading text-muted">Laporan</h6>
		<ul class="navbar-nav mb-md-3">
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/admin/laporanlabarugi"); ?>">
              <i class="fas fa-file"></i> Laporan Laba-Rugi
            </a>
          </li>
		</ul>
		<hr class="my-3">
        <h6 class="navbar-heading text-muted">Extra</h6>
        <!-- Navigation -->
        <ul class="navbar-nav mb-md-3">
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/admin/biaya"); ?>">
              <i class="ni ni-money-coins"></i> Biaya
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/admin/profile"); ?>">
              <i class="fas fa-user"></i> Profile
            </a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/admin/materi"); ?>">
              <i class="ni ni-planet"></i> Materi
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/admin/lahan"); ?>">
              <i class="ni ni-planet"></i> Informasi Lahan
            </a>
          </li>
		   <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/admin/banner"); ?>">
              <i class="fas fa-user"></i> Banner Promo
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/admin/gantipassword"); ?>">
              <i class="ni ni-spaceship"></i> Ganti Password
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url("index.php/admin/logout"); ?>">
              <i class="ni ni-user-run"></i> Logout
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-expand-md navbar-dark" id="navbar-main">
      <div class="container-fluid">
        <!-- Brand -->
       
        <!-- Form -->
        <form class="navbar-search navbar-search-dark form-inline mr-3 d-none d-md-flex ml-lg-auto">
          <div class="form-group mb-0">
            <div class="input-group input-group-alternative">
              <div class="input-group-prepend">
                <span class="input-group-text"><i class="fas fa-search"></i></span>
              </div>
              <input class="form-control" placeholder="Search" type="text">
            </div>
          </div>
        </form>
        <!-- User -->
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                <span class="avatar avatar-sm rounded-circle">
                  <img alt="Image placeholder" src="<?php echo base_url(); ?>/assets/img/theme/team-4-800x800.jpg">
                </span>
                <div class="media-body ml-2 d-none d-lg-block">
                  <span class="mb-0 text-sm  font-weight-bold"><?php echo $username; ?></span>
                </div>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <div class="row">
            <div class="col-xl-4 col-lg-6">
              <div class="card mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Pelanggan</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $jml_pelanggan['jml_pelanggan']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                        <i class="fas fa-user"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Penjualan</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo $jml_transaksi['jml_transaksi']; ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-6">
              <div class="card mb-4 mb-xl-0">
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-uppercase text-muted mb-0">Hasil Penjualan</h5>
                      <span class="h2 font-weight-bold mb-0"><?php echo "Rp. ".number_format($jml_profit['jml_profit'],0,'','.'); ?></span>
                    </div>
                    <div class="col-auto">
                      <div class="icon icon-shape bg-yellow text-white rounded-circle shadow">
                        <i class="ni ni-money-coins"></i>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </div>