<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark fixed-top header-navbar">
      <div class="container px-4">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
          <h1 class="text-white nav-brand">Anugraf PS</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="../index.html">
                  <h2>Anugraf PS</h2>
                </a>
              </div>
              <div class="col-6 collapse-close">
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
          <!-- Navbar items -->
		  <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url(); ?>">
                <i class="fas fa-home"></i>
                <span class="nav-link-inner--text">Beranda</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url(); ?>index.php#produk">
                <i class="ni ni-app"></i>
                <span class="nav-link-inner--text">Produk</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url("index.php/user/info"); ?>">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Informasi Lahan</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url("index.php/user/materi"); ?>">
                <i class="ni ni-planet"></i>
                <span class="nav-link-inner--text">Edukasi Berternak</span>
              </a>
            </li>
			
			<li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url(); ?>index.php#kontak">
                <i class="fas fa-phone"></i>
                <span class="nav-link-inner--text">Kontak</span>
              </a>
            </li>
          </ul>
		  
          <ul class="navbar-nav ml-auto">
			<?php 
				if(! $this->session->userdata('user')) {
			?>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url("index.php/user/register/"); ?>">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Register</span>
              </a>
            </li>
			<?php 
				}
			?>
			<?php 
				if(! $this->session->userdata('user')) {
			?>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url("index.php/user/login/"); ?>">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
			<?php 
				}
			?>
			<?php 
				if($this->session->userdata('user')) {
			?>
			<li class="nav-item">
				<div class="dropdown">
					<a href="#" class="dropdown-toggle text-white" data-toggle="dropdown">
						<span class="fas fa-user"></span> <?php echo $username; ?>
					</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="<?php echo base_url("index.php/user/profile"); ?>"><span class="fas fa-user"></span> Akun</a>
						<a class="dropdown-item" href="<?php echo base_url("index.php/user/billing"); ?>"><span class="ni ni-bullet-list-67"></span> Billing</a>
				
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="<?php echo base_url("index.php/user/logout"); ?>"><span class="ni ni-user-run"></span> Logout</a>
					</div>
				</div>
            </li>
			<?php 
				}
			?>
          </ul>
        </div>
      </div>
    </nav>