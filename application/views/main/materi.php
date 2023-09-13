<div class="post-container">
<div class="container">
		<div class="post text-center">
			<a href="<?php echo base_url("index.php/user/video"); ?>"><button type="button" class="btn btn-primary">Video Edukasi Beternak</button></a>
		</div> <br/>
		<?php foreach($materi as $post) { ?>
			<div class="post">
				<div class="post-header">
					<button type="button" class="btn" style="border: 0px solid transparent; background-color: transparent;" data-toggle="collapse" data-target="#show<?php echo $post['id_materi']; ?>"><h2 class="post-title"><?php echo $post['jdl_materi'];?></h2></button> <hr/>
				</div>
				<div id="show<?php echo $post['id_materi']; ?>" class="collapse">
					<?php echo $post['materi']; ?>
				</div>
			</div>
		<br/>
		<?php } ?>
	
	</div>
</div>
</div>