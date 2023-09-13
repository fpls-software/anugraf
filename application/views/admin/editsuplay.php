	<?php foreach($datasuplier as $suplier) {} ?>
	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Tambah Suplay </h3>
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
					echo form_open("admin/updatesuplier",$form_attribute);
				?>
					<input class="form-control" placeholder="ID Suplier" type="hidden" name="id_suplier" required value="<?php echo $suplier['id_suplier']; ?>">
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Nama Suplier" type="text" name="nm_suplier" required value="<?php echo $suplier['nm_suplier']; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Nama Barang" type="text" name="barang" required value="<?php echo $suplier['nm_produk']; ?>" readonly>
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Satuan Barang" type="text" name="satuan" required value="<?php echo $suplier['satuan']; ?>">
						</div>
					</div>
					
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-money-coins"></i></span>
							</div>
							<input class="form-control" placeholder="Harga Satuan" type="text" name="harga" required value="<?php echo $suplier['harga']; ?>">
						</div>
					</div>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Tanggal Suplay" type="date" name="tgl_beli" required value="<?php echo $suplier['tgl_beli']; ?>">
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