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
              <a class="nav-link nav-link-icon" href="#produk">
                <i class="ni ni-app"></i>
                <span class="nav-link-inner--text">Produk</span>
              </a>
            </li>
			<li class="nav-item">
              <a class="nav-link nav-link-icon" href="#kontak">
                <i class="fas fa-phone"></i>
                <span class="nav-link-inner--text">Kontak</span>
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url("index.php/user/register/"); ?>">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url("index.php/user/login/"); ?>">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
	<br/><br/>
	<div class="header1">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="card">
						<div class="card-header">
							<h2>Promo Terbaru</h2>
						</div>
						<div class="card-content header-content"> 
							<div id="slider" class="carousel slide" data-ride="carousel">
								
								<ul class="carousel-indicators">
									<li data-target="#slider" data-slide-to="0" class="active"></li>
									<li data-target="#slider" data-slide-to="1"></li>
									<li data-target="#slider" data-slide-to="2"></li>
									<li data-target="#slider" data-slide-to="3"></li>
									<li data-target="#slider" data-slide-to="4"></li>
								</ul>
								<div class="carousel-inner text-center">
									<div class="carousel-item active">
										<img src="<?php echo base_url('/assets/img/header.jpg');?>" class="img-header"/>
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url('/assets/img/header.jpg');?>" class="img-header"/>
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url('/assets/img/header.jpg');?>" class="img-header"/>
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url('/assets/img/header.jpg');?>" class="img-header"/>
									</div>
									<div class="carousel-item">
										<img src="<?php echo base_url('/assets/img/header.jpg');?>" class="img-header"/>
									</div>
						
									<a class="carousel-control-prev carousel-control" href="#slider" data-slide="prev">
										<span class="fa fa-arrow-circle-left fa-3x"></span>
									</a>
									<a class="carousel-control-next carousel-control" href="#slider" data-slide="next">
										<span class="fa fa-arrow-circle-right fa-3x"></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="card header-sidebar">
						<div class="card-header">
							<h2>Kategori</h2>
						</div>
						<div class="card-content header-sidebar-content">
							<?php
								foreach($kategori as $loadkategori) {
							?>
								<a href="<?php echo base_url('index.php/user/kategori/').$loadkategori['jenis']; ?>"> 
									<div class="kategori">
										<div class="kategori-item">
											<span class="ni ni-app"></span> <?php echo $loadkategori['jenis']; ?>
										</div>
									</div>
								</a>
							<?php 
								}
							?>
						</div>
					</div>
					<br/>
					
				</div>
			</div>
		</div>
	</div>
	
	