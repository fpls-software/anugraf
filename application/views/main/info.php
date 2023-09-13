<div class="post-container">
<div class="container">
	<div class="post">
		<h2 class="post-title">Informasi Lahan</h2>
		<hr/>
		<?php foreach($info as $post) { ?>
			<div class="row">
				<div class="col-lg-3">
					<img src="<?php echo base_url(); ?>/assets/img/lahan/<?php echo $post['lahan']; ?>" width="100%">
				</div>
				<div class="col-lg-9">
					<div class="row">
						<div class="col-md-3">
							Keuntungan 
						</div>
						<div class="col-md-9">
							<?php echo $post['keuntungan']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							Kerugian
						</div>
						<div class="col-md-9">
							<?php echo $post['kerugian']; ?>
						</div>
					</div>
					<div class="row">
						<div class="col-md-3">
							Keterangan
						</div>
						<div class="col-md-9">
							<?php echo $post['keterangan']; ?>
						</div>
					</div>
				</div>
			</div>
			<hr/>
		<?php } ?>
		
	</div>
</div>
</div>