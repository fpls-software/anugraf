<?php 
	foreach($detailproduct as $produk) {}
?>
<?php if($this->session->flashdata('success')) { ?>
	<script>alert('Pesanan Anda Telah di Proses');</script>
<?php } ?>
<?php if($this->session->flashdata('failed')) { ?>
	<script>alert('Pesanan Anda Tidak dapat di Proses');</script>
<?php } ?>
<div class="content-home">
	<div class="container">
		<div class="card">
			<div class="card-header">
				<h2><?php echo $produk['nm_produk']; ?></h2>
			</div>
			<div class="card-content produk-content">
				<div class="row">
					<div class="col-md-4">
						<img src="<?php echo base_url(); ?>/assets/img/product/<?php echo $produk['gambar']; ?>" width="100%" height="230"/>
					</div>
					<div class="col-md-4">
						<font class="product-name"><?php echo $produk['nm_produk']; ?></font> <br/>
						<font class="product-price"><?php echo "Rp.".number_format($produk['harga'],0,'','.'); ?></font> <p style="font-weight: bold;"><b>JUMLAH STOK : <?php echo $produk['jml_stok']; ?></b></p>
						<div class="seperators"></div>
						<form class="form-horizontal" method="post" action="<?php echo base_url("index.php/user/beliproduk"); ?>">
						<div class="form-group">
							<input type="hidden" class="form-control" name="kd_produk" value="<?php echo $produk['kd_produk'] ?>"/>
							<input type="hidden" class="form-control" name="jml_stok" value="<?php echo $produk['jml_stok'] ?>"/>
							<?php 
								if($this->session->userdata('user')) {
								foreach($akun as $dataprofile) {}
							?>
							<input type="hidden" class="form-control" name="nik" value="<?php echo $dataprofile['nik'] ?>"/>
							<?php } ?>
							<label class="form-control-label">Jumlah Beli</label>
							<div class="input-group input-group-sm">
								<span class="input-group-btn">
									<button onClick="kurang()" type="button" class="btn btn-default btn-flat"><span id="showIcon" class="fa fa-minus"></span></button>
								</span>
								<input type="text" id="jml_beli" name="jml_beli" class="form-control form-input text-center" value="1" onChange="jmlBeli()"/>
								<span class="input-group-btn">
									<button onClick="tambah()" type="button" class="btn btn-default btn-flat"><span id="showIcon" class="fa fa-plus"></span></button>
								</span>
							</div>
						</div>
						<?php 
							if($produk['jml_stok'] == 0) {
								echo "<button type='button' class='btn btn-danger btn-flat' id='beli'>Stok Habis</button>";
							}
							else if($this->session->userdata('user')) {
								echo "<button type='submit' class='btn btn-success btn-flat' id='beli'>Beli Sekarang</button>";
							}
							else {
								echo "<a href='".base_url('index.php/user/login')."'><button id='beli' type='button' class='btn btn-success btn-flat'>Beli Sekarang</button></a>";
							}
						?>
						
					</div>
					<div class="col-md-4 text-center">
						<br/><br/><br/>
						<font class="subtotal-label">
							Sub total
						</font>
						<div id="sub_total" class="text-center">
							
						</div>
					</div>
				</div>
				<hr/>
				<div class="row">
					<div class="col-lg-12">
						<div style="display: none;" id="delivery">
							<p>
								Jumlah Pembelian anda telah memenuhi syarat untuk Menggunakan Fitur Delivery. <b>Untuk menggunakan Fitur ini Pastikan anda telah
								Melengkapi Profile anda terutama dibagian Alamat Lengkap di <a href="<?php echo base_url("index.php/user/profile"); ?>">Profile</a></b>
								Agar mempermudah Kurir untuk mengirimkan Pesanan anda
							</p>
							<p><b>Apakah anda ingin menggunakan Fitur ini?</b></p>
							<select name="sts_delivery" class="form-control" value="tidak">
								<option selected value="tidak">Tidak</option>
								<option value="ya">Ya</option>
							</select>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script>
	var jml_beli = document.getElementById("jml_beli").value;
	var subtotal = <?php echo $produk['harga']; ?> * jml_beli;
	document.getElementById("sub_total").innerHTML = "Rp. " + new Intl.NumberFormat().format(subtotal);
	function beli() {
		alert("Silahkan Login Terlebih Dahulu");
	}
	function jmlBeli()
	{
		var jml_beli = document.getElementById("jml_beli").value;
		if(jml_beli > 19) {
			document.getElementById("delivery").style.display = "block";
		}
		else if(jml_beli < 1){
			document.getElementById("beli").disabled = "";
		}
		else{
			document.getElementById("delivery").style.display = "none";
		}
		var total =  <?php echo $produk['harga']; ?> * jml_beli;
		document.getElementById("sub_total").innerHTML = "Rp. " + new Intl.NumberFormat().format(total);
	}
	function tambah() {
		var jml_beli = document.getElementById("jml_beli").value;
		if(jml_beli == <?php echo $produk['jml_stok']; ?>) {
			document.getElementById("tambah").disabled;
		}
		var tambah = parseInt(jml_beli) + 1;
		document.getElementById("jml_beli").value = tambah;
		var total =  <?php echo $produk['harga']; ?> * tambah;
		if(jml_beli > 18) {
			document.getElementById("delivery").style.display = "block";
		}
		else{
			document.getElementById("delivery").style.display = "none";
		}
		document.getElementById("sub_total").innerHTML = "Rp. " + new Intl.NumberFormat().format(total);
	}
	function kurang() {
		var jml_beli = document.getElementById("jml_beli").value;
		if(jml_beli == 1) {
			document.getElementById("kurang").disabled;
		}
		if(jml_beli > 20) {
			document.getElementById("delivery").style.display = "block";
		}
		else{
			document.getElementById("delivery").style.display = "none";
		}
		var kurang = parseInt(jml_beli) - 1;
		document.getElementById("jml_beli").value = kurang;
		var total =  <?php echo $produk['harga']; ?> * kurang;
		document.getElementById("sub_total").innerHTML = "Rp. " + new Intl.NumberFormat().format(total);
	}
</script>
