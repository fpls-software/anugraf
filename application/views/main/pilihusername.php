<br/><br/><br/><br/>
<div class="content">
	<div class="container">
		<div class="form-container-1">
			<form method="post" action="<?php echo base_url("index.php/user/validusername"); ?>">
				<p class="text-center">Silahkan Masukkan Username anda...!</p>
                <div class="form-group mb-3">
					<div class="input-group input-group-alternative">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="ni ni-email-83"></i></span>
						</div>
						<input class="form-control" placeholder="Username" type="text" name="username">
						<button type="submit" class="btn btn-primary">Next</button>
					</div>
                </div>
			</form>
			<br/>
			<?php if($this->session->flashdata('failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('failed'); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>