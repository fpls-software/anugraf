<br/><br/><br/><br/>
<?php foreach($datasecurity as $data) {} ?>
<div class="content">
	<div class="container">
		<div class="form-container-1">
			<form method="post" action="<?php echo base_url("index.php/user/validanswer"); ?>">
				<p class="text-center">Silahkan Jawab Pertanyaan Keamanan Dibawah...!</p>
				<div class="form-group mb-3">
					<div class="input-group input-group-alternative">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="ni ni-key-25"></i></span>
						</div>
						<textarea class="form-control" placeholder="Username" type="text" name="s_question" readonly rows="2"><?php echo $data['s_question']; ?></textarea>
					</div>
                </div>
				<input class="form-control" type="hidden" name="username" value="<?php echo $data['username']; ?>">
                <div class="form-group mb-3">
					<div class="input-group input-group-alternative">
						<div class="input-group-prepend">
							<span class="input-group-text"><i class="ni ni-key-25"></i></span>
						</div>
						<input class="form-control" placeholder="Jawaban Anda?" type="text" name="s_answer">
						<button type="submit" class="btn btn-primary">Next</button>
					</div>
                </div>
			</form>
			<br/>
			<?php if($this->session->flashdata('failed')) { ?>
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
					<?php echo $this->session->flashdata('failed'); ?>
				</div>
			<?php } ?>
		</div>
	</div>
</div>