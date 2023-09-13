
<?php 
	foreach($transaksi as $trans) {}
	foreach($akun as $profile) {}
	$date = date("Y-m-d");
?>
<br/><br/><br/><br/>
<div class="content">
	<div class="container">
		<h2>KONFIRMASI PEMBAYARAN</h2>
		<?php 
			$form_attribute = array(
				"method"	=> 'post',
				'class'		=> 'form-horizontal'
			);
			echo form_open_multipart("user/simpanpembayaran", $form_attribute);
		?>
			<div class="row">
				<div class="col-lg-12">
					<div class="card">
						<div class="card-header">
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
						</div>
						<div class="card-body">
							<label class="label-control">Invoice</label>
							<input type="text" name="id_transaksi" class="form-control" value="<?php echo $id_transaksi; ?>" readonly />
							<label class="label-control">Nomor Rekening</label>
							<input type="text" name="nmr_rekening" class="form-control"/>
							<label class="label-control">Nama Bank</label>
							<select class="form-control" name="nm_bank">
								<option>BRI</option>
								<option>BNI</option>
								<option>BCA</option>
								<option>MANDIRI</option>
							</select>
							<label class="label-control">Nama Pemilik Rekening</label>
							<input type="text" name="nm_pemilik" class="form-control" value="<?php echo $trans['nama']; ?>"/>
							<label class="label-control">Jumlah Transfer</label>
							<input type="text" name="jml_transfer" class="form-control" value="<?php echo $trans['ttl_harga']; ?>"/>
							<label class="label-control">Tanggal Transfer</label>
							<input type="text" name="tgl_transfer" class="form-control" value="<?php echo $date; ?>"/>
							<label class="label-control">Bukti Transfer</label>
							<input type="file" name="bukti" class="form-control">
							<br/>
							<button type="submit" class="btn btn-primary">Kirim</button>
						</div>
					</div>
				</div>
			</div>
		<?php 
			echo form_close();
		?>
	</div>
</div>