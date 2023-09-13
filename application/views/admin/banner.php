<?php if($this->session->flashdata('hapus_success')) { ?>
	<script>alert('Banner Berhasil Di Hapus');</script>
<?php } ?>

<?php if($this->session->flashdata('hapus_failed')) { ?>
	<script>alert('Tidak Dapat Menghapus Banner');;</script>
<?php } ?>
<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0"> Upload Banner Promo </h3>
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
					echo form_open_multipart("admin/tambahbanner",$form_attribute);
				?>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-image"></i></span>
							</div>
							<input class="form-control" placeholder="Kode Produk" type="file" name="banner">
							<button type="submit" class="btn btn-primary">Tambah Banner</button>
						</div>
					</div>
				<?php echo form_close(); ?>
			</div>
			<div class="row">
				<?php foreach($databanner as $banner) { ?>
					<div class="col-lg-4"> 
						<div class="card">
							<div class="card-body">
								<img src="<?php echo base_url("/assets/img/banner/").$banner['banner']; ?>" width="100%"/>
							</div>
							<div class="card-footer">
								<a href="<?php echo base_url("index.php/admin/hapusbanner/").$banner['id_banner']; ?>"><button style="width: 100%;" type="button" class="btn btn-danger">Hapus Banner</button></a>
							</div>
						</div>
					</div>
				<?php } ?>
			</div>
            </div>
          </div>
        </div>
      </div>