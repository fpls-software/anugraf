<?php  foreach($datamateri as $materi) {} ?>
<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
			<div class="tab-content">
				<div id="tambahmateri" class="container tab-pane active"><br>
					<div class="form-container">
						<?php if($this->session->flashdata('update_berhasil')) { ?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('update_berhasil'); ?>
						</div>
						<?php } ?>
						<?php if($this->session->flashdata('update_gagal')) { ?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
							<?php echo $this->session->flashdata('update_gagal'); ?>
						</div>
						<?php } ?>
						<?php 
							$form_attribute = array(
								'method'	=> 'post'
							);
							echo form_open_multipart("admin/updatemateri",$form_attribute);
						?>
							<?php 
								$form_attribute = array(
									'type'		=> 'hidden',
									'class'		=> 'form-control',
									'name'		=> 'id_materi',
									'value'		=> $materi['id_materi']
								);
								echo form_input($form_attribute);
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
											'name'		=> 'jdl_materi',
											'value'		=> $materi['jdl_materi']
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
									'name'		=> 'materi',
									'value'		=> $materi['materi']
								);
								echo form_textarea($form_attribute);
							?>
							<br/>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Update</button>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
				<div id="datamateri" class="container tab-pane fade"><br>
					<div class="form-container">
						<div class="float-right">
							<form method="get" action="<?php echo base_url("index.php/admin/carimateri");?>">
								<div class="input-group mb-3">
									<input type="text" class="form-control-sm">
									<div class="input-group-append">
										<button type="" class="btn btn-primary btn-sm">Cari</button>
									</div>
								 </div>
							</form>
						</div>
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
				<div id="video">
					<div class="container-fluid">
						<div class=""
					</div>
				</div>
			</div>
            </div>
          </div>
        </div>
      </div>