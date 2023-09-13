<?php foreach($dataprofile as $data) {} ?>
<div class="container">
	<div class="content-header">
		<h2 class="text-center text-white">Tentang Kami</h2>

	</div>
	<div class="content-body">
		<p class="text-white text-center">
			<?php echo $data['tentangkami']; ?>
		</p>
	</div>
</div>
<div class="content-home" id="produk">
	<div class="container"><br/>
		<div class="row">
			<div class="col-lg-3">
				<h3>Kategori Produk</h3>
			</div>
			<div class="col-lg-9">
				<?php
					foreach($kategori as $loadkategori) {
				?>
					<a href="<?php echo base_url('index.php/user/kategori/').$loadkategori['jenis']; ?>">
						<font class="kategori-hr-item">
							<span class="ni ni-app"></span> <?php echo $loadkategori['jenis']; ?>
						</font>
					</a>
				<?php 
					}
				?>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php 
						foreach($product as $produk) {
					?>
						<div class="col-md-3">
							<div class="card">
								<div class="card-body">
									<img src="<?php echo base_url(); ?>/assets/img/product/<?php echo $produk['gambar']; ?>" width="100%" height="200"/>
								</div>
								
								<div class="card-footer">
									<?php echo $produk['nm_produk']; ?>
									<b> <?php echo "Rp.".number_format($produk['harga'],0,'','.'); ?> </b>
								</div>
								<br/>
								<a href="<?php echo base_url("index.php/user/detailproduct/").$produk['kd_produk']; ?>"><button type="button" class="btn btn-success btn-flat btn-md">Detail</button></a>
							</div>
						</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
		<hr/>
	</div>
</div>
