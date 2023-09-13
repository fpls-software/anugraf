<?php foreach($videos as $video) {} ?>
<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					
				</div>
              </div>
            </div>
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
							echo form_open("admin/updatevideo",$form_attribute);
						?>
							<?php 
								$form_attribute = array(
									'type'		=> 'hidden',
									'readonly'	=> '',
									'class'		=> 'form-control',
									'name'		=> 'id_video',
									'value'		=> $video['id_video']
								);
								echo form_input($form_attribute);
							?>
							<label class="label-control">Title Video</label>
							<div class="form-group">
								<div class="input-group input-group-alternative mb-3">
									<div class="input-group-prepend">
										<span class="input-group-text"><i class="ni ni-planet"></i></span>
									</div>
									<?php 
										$form_attribute = array(
											'type'		=> 'text',
											'class'		=> 'form-control',
											'name'		=> 'judul',
											'value'		=> $video['judul']
										); 
										echo form_input($form_attribute);
									?>
								</div>
							</div>
							<label class="label-control">Code Video</label>
							<?php 
								$form_attribute = array(
									'type'		=> 'text',
									'class'		=> 'form-control',
									'name'		=> 'video',
									'rows'		=> 5,
									'value'		=> $video['video']
								);
								echo form_textarea($form_attribute);
							?>
							<label class="label-control">Deskripsi</label>
							<?php 
								$form_attribute = array(
									'type'		=> 'text',
									'id'		=> 'ckeditor',
									'class'		=> 'form-control',
									'name'		=> 'materi',
									'value'		=> $video['deskripsi']
								);
								echo form_textarea($form_attribute);
							?>
							<br/>
							<div class="form-group">
								<button type="submit" class="btn btn-primary">Update Video</button>
							</div>
						<?php echo form_close(); ?>
					</div>
				</div>
			</div>
            </div>
          </div>
        </div>
      </div>