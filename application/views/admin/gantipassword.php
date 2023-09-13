	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Ganti Password</h3>
				</div>
              </div>
            </div>
            <div class="form-container">
				<?php if($this->session->flashdata('resetpassword_berhasil')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('resetpassword_berhasil'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('resetpassword_gagal')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('resetpassword_gagal'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('reset_gagal')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('reset_gagal'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('password_invalid')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('password_invalid'); ?>
				</div>
				<?php } ?>
				<form action="<?php echo base_url("index.php/admin/simpanpassword"); ?>" method="post" style="width: 400px;">
					<label class="label-control">Password Lama</label>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-key-25"></i></span>
							</div>
							<input class="form-control" type="password" name="passwordlama">
						</div>
					</div>
					<label class="label-control">Password Baru</label>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-key-25"></i></span>
							</div>
							<input class="form-control" type="password" name="passwordbaru">
						</div>
					</div>
					<label class="label-control">Konfirmasi Password Baru</label>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-key-25"></i></span>
							</div>
							<input class="form-control" type="password" name="konfirmasipasswordbaru">
						</div>
					</div>
					
					<button type="submit" class="btn btn-primary"> Simpan Password</button> <br/><br/>
				</form>
			</div>
          </div>
        </div>
      </div>