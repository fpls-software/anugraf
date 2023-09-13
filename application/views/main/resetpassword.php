<br/><br/><br/><br/>
<?php foreach($datasecurity as $data) {} ?>
<div class="content">
	<div class="container">
		<div class="form-container-1">
			<form method="post" action="<?php echo base_url("index.php/user/gantipassword"); ?>">
				<p class="text-center">Silahkan Masukkan Password Baru Anda</p>
				<input class="form-control" type="hidden" name="username" value="<?php echo $data['username']; ?>">
				 <div class="form-group mb-3">
					<div class="input-group input-group-alternative">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="ni ni-key-25"></i></span>
						</div>
						<input class="form-control" placeholder="Masukkan Password Baru" type="password" name="password">
					</div>
                </div>
                <div class="form-group mb-3">
					<div class="input-group input-group-alternative">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="ni ni-key-25"></i></span>
						</div>
						<input class="form-control" placeholder="Masukkan Ulang Password Anda" type="password" name="repassword">
					</div>
                </div>
				<div class="text-center"> <button type="submit" class="btn btn-primary">Reset Password</button> </div>
			</form>
			<br/>
			<?php if($this->session->flashdata('gantisuccess')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('gantisuccess'); ?>
				</div>
			<?php } ?>
			<?php if($this->session->flashdata('gantifailed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('gantifailed'); ?>
				</div>
			<?php } ?>
			<?php if($this->session->flashdata('refailed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('refailed'); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>