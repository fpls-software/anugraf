<body class="bg-default">
  <div class="main-content">
    <!-- Navbar -->
    <nav class="navbar navbar-top navbar-horizontal navbar-expand-md navbar-dark">
      <div class="container px-4">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">
          <h1 class="text-white">ANUGRAF PS</h1>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse-main" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar-collapse-main">
          <!-- Collapse header -->
          <div class="navbar-collapse-header d-md-none">
            <div class="row">
              <div class="col-6 collapse-brand">
                <a href="<?php echo base_url(); ?>">
                  <h2>ANUGRAF PS</h2>
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
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url(); ?>">
                <i class="fas fa-home"></i>
                <span class="nav-link-inner--text">Beranda</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url("index.php/user/register"); ?>">
                <i class="ni ni-circle-08"></i>
                <span class="nav-link-inner--text">Register</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav-link-icon" href="<?php echo base_url("index.php/user/login"); ?>">
                <i class="ni ni-key-25"></i>
                <span class="nav-link-inner--text">Login</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="col-lg-5 col-md-6">
              <h1 class="text-white">Selamat Datang!</h1>
              <p class="text-lead text-light"></p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <div class="row justify-content-center">
        <div class="col-lg-5 col-md-7">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">
              <div class="btn-wrapper text-center">
				<h2>ANUGRAF PS LOGIN</h2>
				<?php if($this->session->flashdata('failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('failed'); ?>
				</div>
				<?php } ?>
              </div>
            </div>
            <div class="card-body px-lg-5 py-lg-5">
              <div class="text-center text-muted mb-4">
                <small class="text-dark">Silahkan Login Menggunakan Username dan Password Anda!</small>
              </div>
              <form method="post" action="<?php echo base_url("index.php/user/loginvalidation"); ?>">
                <div class="form-group mb-3">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" type="text" name="username">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-lock-circle-open"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" type="password" name="password">
                  </div>
                </div>
               
                <div class="text-center">
                  <button type="submit" class="btn btn-primary my-4">Masuk</button>
                </div>
				<div class="row mt-3">
					<div class="col-6">
						<a href="<?php echo base_url("index.php/user/pilihusername"); ?>" class="text-dark"><small>Lupa Kata Sandi?</small></a>
					</div>
					<div class="col-6 text-right">
						<a href="<?php echo base_url("index.php/user/register"); ?>" class="text-dark"><small>Buat Akun Baru</small></a>
					</div>
				</div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="py-5">
      <div class="container">
        <div class="row align-items-center justify-content-xl-between">
          <div class="col-xl-6">
            <div class="copyright text-center text-xl-left text-muted">
			<?php 
				$date = date("Y");
				$now  = 2019;
			?>
              © 
			  <?php
				if($now = $date) {
					echo " ".$date;
				}
				else {
					echo "2019 - ".$date;
				}
			  ?> <a href="<?php echo base_url(); ?>" class="font-weight-bold ml-1" target="_blank">Anugraf PS</a>
            </div>
          </div>
          <div class="col-xl-6">
            <ul class="nav nav-footer justify-content-center justify-content-xl-end">
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">St. Aisyah</a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link" target="_blank">Tentang Kami</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <!--   Core   -->
  <script src="<?php echo base_url(); ?>/assets/js/plugins/jquery/dist/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="<?php echo base_url(); ?>/assets/js/argon-dashboard.min.js?v=1.1.0"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>

</html>