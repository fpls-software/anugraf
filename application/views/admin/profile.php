<?php if($this->session->flashdata('hapuskontak_success')) { ?>
	<script>alert('Berhasil Menghapus Kontak');</script>
<?php } ?>

<?php if($this->session->flashdata('hapuskontak_failed')) { ?>
	<script>alert('Gagal Menghapus Kontak');;</script>
<?php } ?>
	<?php foreach($dataprofile as $data) {} ?>
	<div class="container-fluid mt--7">
	<div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<h3>Tentang Anugraf PS</h3>
				</div>
				<div class="card-content produk-content">
				<?php if($this->session->flashdata('t_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('t_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('t_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('t_failed'); ?>
				</div>
				<?php } ?>
					<form role="form" action="<?php echo base_url("index.php/admin/simpandeskripsi/"); ?>" method="post">
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-bullet-list-67"></i></span>
								</div>
								<textarea class="form-control" placeholder="Masukkan Deskripsi tentang Anugraf PS" name="tentangkami" type="text" rows="5"><?php echo $data['tentangkami']; ?></textarea>
							</div>
						</div>
						
						<br/>
						<button type="submit" class="btn btn-primary"><span class="ni ni-bullet-list-67"></span> Simpan Deskripsi</button>
					</form>
				</div>
			</div>
		</div>
	  </div>
      <div class="row mt-5">
        <div class="col-xl-4 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Tambah Data Kontak</h3>
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
					echo form_open("admin/simpankontak",$form_attribute);
				?>
					<label class="control-label">Nama Kontak</label>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Contoh : Whatsapp" type="text" name="nm_kontak" required>
						</div>
					</div>
					<label class="control-label">Kontak</label>
					<div class="form-group">
						<div class="input-group input-group-alternative mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text"><i class="ni ni-app"></i></span>
							</div>
							<input class="form-control" placeholder="Contoh : 082327******" type="text" name="kontak" required>
						</div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary"><span class="ni ni-app"></span> Simpan Data</button>
					</div>
				<?php echo form_close(); ?>
			</div>
            </div>
          </div>
		  
		  
		  <div class="col-xl-8 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Data Kontak</h3>
				</div>
              </div>
            </div>
			<div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th>No</th>
                    <th>Nama Kontak</th>
                    <th>Kontak</th>
                    <th colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
					$no = 1;
					foreach($kontak as $datakontak) {
				?>
                  <tr>
					<td width="1">
						<?php echo $no++; ?>
					</td>
                    <th>
						<?php echo $datakontak['nm_kontak']; ?>
                    </th>
                    <td width="100">
						<?php echo $datakontak['kontak']; ?>
                    </td>

					<td width="10">
						<a href="<?php echo base_url('index.php/admin/editkontak/'.$datakontak['id_kontak']); ?>"><button type="button" class="btn btn-success btn-sm"><span class="fas fa-edit"></span> Edit</button></a>
					</td>
					<td width="10">
						<a href="<?php echo base_url('index.php/admin/hapuskontak/'.$datakontak['id_kontak']); ?>"><button type="button" class="btn btn-danger btn-sm"><span class="fas fa-delete"></span> Hapus</button></a>
					</td>
                  </tr>
				<?php 
					}
				?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
	  <br/>
	  <div class="row">
		<div class="col-lg-12">
			<div class="card">
				<div class="card-header">
					<h3>Koordinat Peta</h3>
				</div>
				<div class="card-content produk-content">
				<?php if($this->session->flashdata('k_success')) { ?>
				<div class="alert alert-success alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('k_success'); ?>
				</div>
				<?php } ?>
				<?php if($this->session->flashdata('k_failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('k_failed'); ?>
				</div>
				<?php } ?>
					<form role="form" action="<?php echo base_url("index.php/admin/simpankoordinat/"); ?>" method="post">
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-pin-3"></i></span>
								</div>
								<input class="form-control" placeholder="Latitude" name="latitude" type="text" value="<?php echo $data['latitude'] ?>">
							</div>
						</div>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-pin-3"></i></span>
								</div>
								<input class="form-control" placeholder="Longitude" name="longitude" type="text" value="<?php echo $data['longitude']; ?>">
							</div>
						</div>
						<br/>
						<button type="submit" class="btn btn-primary"><span class="ni ni-pin-3"></span> Simpan Koordinat</button>
					</form>
				</div>
			</div>
		</div>
	  </div>