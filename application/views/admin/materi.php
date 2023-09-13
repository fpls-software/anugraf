<?php if($this->session->flashdata('delete_berhasil')) { ?>
	<script>alert('Berhasil Menghapus Data');</script>
<?php } ?>

<?php if($this->session->flashdata('delete_gagal')) { ?>
	<script>alert('Gagal Menghapus Data');;</script>
<?php } ?>
<?php if($this->session->flashdata('deletevideo_berhasil')) { ?>
	<script>alert('Berhasil Menghapus Video');</script>
<?php } ?>

<?php if($this->session->flashdata('deletevideo_gagal')) { ?>
	<script>alert('Gagal Menghapus Video');;</script>
<?php } ?>
<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<ul class="nav nav-tabs">
						<li class="nav-item">
							<a class="nav-link active" data-toggle="tab" href="#tambahmateri">Tambah Materi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#datamateri">Materi</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" data-toggle="tab" href="#video">Video</a>
						</li>
					</ul>
				</div>
              </div>
            </div>
			<div class="tab-content">
				<div id="tambahmateri" class="container tab-pane active"><br>
					<div class="form-container">
						<?php if($this->session->flashdata('publish_berhasil')) { ?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('publish_berhasil'); ?>
						</div>
						<?php } ?>
						<?php if($this->session->flashdata('publish_gagal')) { ?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('publish_gagal'); ?>
						</div>
						<?php } ?>
						<?php 
							$form_attribute = array(
								'method'	=> 'post'
							);
							echo form_open_multipart("admin/publishmateri",$form_attribute);
						?>
							<label class="label-control">Judul Materi</label>
							<div class="form-group">
								<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-planet"></i></span>
									</div>
									<?php 
										$form_attribute = array(
											'type'		=> 'text',
											'class'		=> 'form-control',
											'name'		=> 'jdl_materi'
										); 
										echo form_input($form_attribute);
									?>
								</div>
							</div>
							<label class="label-control">Materi</label>
							<?php 
								$form_attribute = array(
									'type'		=> 'text',
									'id'		=> 'ckeditor',
									'class'		=> 'form-control',
									'name'		=> 'materi'
								);
								echo form_textarea($form_attribute);
							?>
							<br/>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Publikasikan</button>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
				<div id="datamateri" class="container tab-pane fade"><br>
					<div class="form-container">
						
						<table class="table align-items-center">
							<thead>
								<tr>
									<th>#</th>
									<th>Judul Materi</th>
									<th>Materi</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php 
									$no = 1;
									foreach($datamateri as $materi) : 
								?>
									<tr>
										<td width="10"><?php echo $no++; ?></td>
										<td width="70"><?php echo $materi['jdl_materi']; ?></td>
										<td width="150"><?php echo substr($materi['materi'],0,35)."..."; ?></td>
										<td width="40">
											<a href="<?php echo base_url("index.php/admin/editmateri/").$materi['id_materi']; ?>"><button type="button" class="btn btn-primary btn-sm"><span class="fas fa-edit"></span></button></a>
											<a href="<?php echo base_url("index.php/admin/hapusmateri/").$materi['id_materi']; ?>"><button type="button" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></button></a>
										</td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
				<div id="video" class="tab-pane fade">
						<div class="video-container">
							<div class="card">
								<div class="card-header">
									<div class="row">
										<div class="col-lg-6">
											<b>Video Materi</b>
										</div>
										<div class="col-lg-6 text-right">
											<a href="<?php echo base_url("index.php/admin/tambahvideo"); ?>"><button type="button" class="btn btn-primary btn-sm">Tambah Video</button></a>
										</div>
								</div>
								<div class="card-body">
									<div class="row">
										<?php foreach($materivideo as $video) { ?>
											<div class="col-lg-4 col-md-4 col-sm-4">
												<?php echo $video['video']; ?>
											</div>
											<div class="col-lg-8 col-md-8 col-sm-8">
												<b><?php echo $video['judul']; ?></b><hr/>
												<a href="<?php echo base_url('index.php/admin/editvideo/').$video['id_video']; ?>" title="Edit Data Video"><button type="button" class="btn btn-success btn-sm"><span class="fas fa-edit"></span></button></a>
												<a href="<?php echo base_url('index.php/admin/hapusvideo/').$video['id_video']; ?>" title="Hapus Video"><button type="button" class="btn btn-danger btn-sm"><span class="fas fa-trash"></span></button></a>
											</div>
										<?php } ?>
									</div>
								</div>
							</div>
						</div>
				</div>
			</div>
            </div>
          </div>
        </div>
      </div>