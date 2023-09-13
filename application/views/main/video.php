<div class="post-container">
	<div class="container">
		<div class="post text-center">
			<h4>Video Edukasi Beternak</h4>
		</div> <br/>
		<div class="row">
			<?php foreach($materivideo as $video) { ?>
				<div class="col-lg-3 col-md-3 col-sm-3">
					<div class="video-container">
						<div class="video-body">
							<?php echo $video['video']; ?>
						</div>
						<div class="video-footer">
							<?php echo $video['judul']; ?>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>