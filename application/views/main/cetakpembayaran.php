<?php
	foreach($cetakpembayaran as $cetak) {}
?>
<head>
<style>
	.print {
		margin-top: 20px;
	}
	.bold-hr {
		border: 3px solid #333
	}
	.normal-hr {
		margin-top: -30px;
		border: 1px solid #333
	}
</style>
</head>
<body>
<div class="container"><br/>
	<button onClick="printDiv('PrintArea')" type="button" class="btn btn-primary btn-sm"><span class="fas fa-print"></span> Cetak</button> <hr/>
</div>
<div class="container print" id="PrintArea">
	<div class="print-header">
		<h3 class="text-center">ANUGRAF PS</h3>
		<hr class="bold-hr"/>
		<hr class="normal-hr"/>
	</div>
	<div class="print-content">
		<div class="row">
			<div class="col-lg-6">
				<h3>Detail Produk</h3>
				<hr/>
				<div class="row">
					<div class="col-md-6">
						Kode Produk
					</div>
					<div class="col-md-6">
						<?php echo $cetak['kd_produk']; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Nama Produk
					</div>
					<div class="col-md-6">
						<?php echo $cetak['nm_produk']; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Harga
					</div>
					<div class="col-md-6">
						<?php echo "Rp.".number_format($cetak['harga'],0,'','.'); ?>
					</div>
				</div>
				<br/><br/>
				<h3>Detail Transaksi</h3>
				<hr/>
				<div class="row">
					<div class="col-md-6">
						<b>ID Transaksi</b>
					</div>
					<div class="col-md-6">
						<b><?php echo $cetak['id_transaksi']; ?></b>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Tanggal Pembelian
					</div>
					<div class="col-md-6">
						<?php echo $cetak['tgl_transaksi']; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Jumlah Pembelian
					</div>
					<div class="col-md-6">
						<?php echo $cetak['jml_beli']; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<b>Total Harga</b>
					</div>
					<div class="col-md-6">
						<b><?php echo "Rp.".number_format($cetak['jml_beli'] * $cetak['harga'],0,'','.') ; ?></b>
					</div>
				</div>
				<hr/>
			</div> 
			<div class="col-lg-6">
				<h3>Detail Pembayaran</h3>
				<hr/>
				<div class="row">
					<div class="col-md-6">
						Tanggal Pembayaran
					</div>
					<div class="col-md-6">
						<?php echo $cetak['tgl_transfer']; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Metode Pembayaran
					</div>
					<div class="col-md-6">
						<?php echo "Transfer ATM"; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Dari BANK
					</div>
					<div class="col-md-6">
						<?php echo $cetak['nm_bank']; ?>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						Pemilik Rekenig
					</div>
					<div class="col-md-6">
						<?php echo $cetak['nm_pemilik']; ?>
					</div>
				</div> <br/><br/>
				<div class="row">
					<div class="col-md-12 text-center">
						<b>Jumlah Pembayaran</b>
					</div>
					
				</div><br/>
				<div class="row">
					<div class="col-md-12 text-center">
						<b style="font-size: 40px;"><?php echo "Rp.".number_format($cetak['jml_transfer'],0,'','.'); ?></b>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
function printDiv(divName){
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;
     document.body.innerHTML = printContents;
     window.print();
     document.body.innerHTML = originalContents;
}
</script>
</body>
</html>