	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Tambah Produk </h3>
				</div>
              </div>
            </div>
			<div class="form-container">
				<?php if($this->session->flashdata('simpan_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('simpan_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('simpan_failed'); ?>
				</div>
				<?php } ?>
				<?php 
					$form_attribute = array(
						'method'	=> 'post'
					);
					echo form_open_multipart("admin/simpanproduk",$form_attribute);
				?>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-key-25"></i></span>
							</div>
							<input class="form-control" placeholder="Kode Produk" type="text" name="kd_produk" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Nama Produk" type="text" name="nm_produk" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-money-coins"></i></span>
							</div>
							<input class="form-control" placeholder="Harga Produk" type="text" name="harga" required>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
							</div>
							<input class="form-control" placeholder="Jenis Produk" type="text" name="jenis" required>
							<select class="form-control" name="jenis">
								<option>Telur</option>
								<option>Pakan</option>
								<option>Obat</option>
							</select>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-image"></i></span>
							</div>
							<input class="form-control" type="file" name="gambar">
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Simpan Produk</button>
					</div>
				<?php echo form_close(); ?>
			</div>
            </div>
          </div>
        </div>
      </div>