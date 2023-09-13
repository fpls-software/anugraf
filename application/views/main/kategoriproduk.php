<?php foreach($kategoriproduct as $loadata) {} ?>
<div class="content-home" id="produk">
	<div class="container"><br/>
		<div class="row">
			<div class="col-lg-3">
				<h3>Kategori Produk</h3>
			</div>
			<div class="col-lg-9">
				<h3><?php echo $loadata['jenis']; ?></h3>
			</div>
		</div>
		<hr/>
		<div class="row">
			<div class="col-lg-12">
				<div class="row">
					<?php 
						foreach($kategoriproduct as $loaddata) {
					?>
						<div class="col-md-3">
							<div class="card">
								<div class="card-body">
									<img src="<?php echo base_url(); ?>/assets/img/product/<?php echo $loaddata['gambar']; ?>" width="100%" height="200"/>
								</div>
								
								<div class="card-footer">
									<?php echo $loaddata['nm_produk']; ?>
									<b> <?php echo "Rp.".number_format($loaddata['harga'],0,'','.'); ?> </b>
								</div>
								<br/>
								<a href="<?php echo base_url("index.php/user/detailproduct/").$loaddata['kd_produk']; ?>"><button type="button" class="btn btn-success btn-flat btn-md">Detail</button></a>
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