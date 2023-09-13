
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
								<div class="carousel-inner text-center">
									<div class="carousel-item active">
										<img src="<?php echo base_url('/assets/img/header.jpg');?>" class="img-header"/>
									</div>
									<?php foreach($databanner as $banner) { ?>
										<div class="carousel-item">
											<img src="<?php echo base_url('/assets/img/banner/').$banner['banner'];?>" class="img-header"/>
										</div>
									<?php 
									}
									?>
						
									
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
	
	