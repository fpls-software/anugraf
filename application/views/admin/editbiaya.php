	<?php foreach($databiaya as $biaya) {} ?>
	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Edit Biaya </h3>
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
					echo form_open("admin/updatebiaya",$form_attribute);
				?>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-key-25"></i></span>
							</div>
							<input class="form-control" placeholder="Kode Rekening" type="text" name="kode_rekening" value="<?php echo $biaya['kode_rekening'] ?>" required readonly>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="fas fa-calendar"></i></span>
							</div>
							<input class="form-control" placeholder="Tanggal" type="date" name="tanggal" required value="<?php echo $biaya['tanggal'] ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Deskripsi" type="text" name="deskripsi" required value="<?php echo $biaya['deskripsi'] ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-money-coins"></i></span>
							</div>
							<input class="form-control" placeholder="Jumlah" type="text" name="jumlah" required value="<?php echo $biaya['jumlah'] ?>">
							
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-money-coins"></i></span>
							</div>
							<input class="form-control" placeholder="Jenis Biaya" type="text" name="jns_biaya" required value="<?php echo $biaya['jns_biaya'] ?>">
							
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