	<?php foreach($datakontak as $kontak) {} ?>
	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Edit Kontak </h3>
				</div>
              </div>
            </div>
			<div class="form-container">
				<?php if($this->session->flashdata('update_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('update_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('update_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('update_failed'); ?>
				</div>
				<?php } ?>
				<?php 
					$form_attribute = array(
						'method'	=> 'post'
					);
					echo form_open("admin/updatekontak",$form_attribute);
				?>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<input class="form-control" placeholder="ID Kontak" type="hidden" name="id_kontak" value="<?php echo $kontak['id_kontak'] ?>" required readonly>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-file"></i></span>
							</div>
							<input class="form-control" placeholder="Tanggal" type="text" name="nm_kontak" required value="<?php echo $kontak['nm_kontak'] ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Deskripsi" type="text" name="kontak" required value="<?php echo $kontak['kontak'] ?>">
						</div>
					</div>
					
					
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Simpan Data</button>
					</div>
				<?php echo form_close(); ?>
			</div>
            </div>
          </div>
        </div>
      </div>