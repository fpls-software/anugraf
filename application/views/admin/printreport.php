<?php 
	foreach($reportpenjualan as $penjualan) {}
	foreach($reportsumbiaya as $sumbiaya) {}
	foreach($reportpembelian as $pembelian) {}
?>
<body>
<br/>
<div class="print-container">
	<div class="container">
		<button onClick="printDiv('PrintArea')" type="button" class="btn btn-primary"><span class="fas fa-print"></span> Print</button> <hr/>
		<div class="print-area" id="PrintArea">
			<div class="print-header text-center">
				<h2>ANUGRAF PS</H2>
				<h4>LAPORAN LABA RUGI</H4>
				<h4>Laporan Tanggal <?php echo $from; ?> - <?php echo $to; ?></H4>
				<hr style="border: 3px solid #333;"/>
			</div>
			<div class="print-body">
			<table class="table-striped" border="1" width="100%">
				<tr>
					<td colspan="5"><b>Pendapatan Dari Penjualan</b></td>
				</tr>
				<tr>
					<td width="100"></td>
					<td width>Penjualan Online</td>
					<td width="150" class="text-right"></td>
					<td width="150" class="text-right"><?php echo "Rp.".number_format($penjualan['jumlah'],0,'','.'); ?></td>
					<td width="150" class="text-right"></td>
				</tr>
				<tr>
					<td width="100"></td>
					<td width>Penjualan Bersih</td>
					<td width="150" class="text-right"></td>
					<td width="150" class="text-right"></td>
					<td width="150" class="text-right"><?php echo "Rp.".number_format($penjualan['jumlah'],0,'','.'); ?></td>
				</tr>
				<tr>
					<td colspan="4">Harga Pokok Penjualan</td>
					<td class="text-right"><?php echo "Rp.".number_format($pembelian['jumlah'],0,'','.'); ?></td>
				</tr>
				<tr>
					<td colspan="4"><b>Laba/Rugi Kotor</b></td>
					<td class="text-right"><b><?php echo "Rp.".number_format($penjualan['jumlah'] - $pembelian['jumlah'],0,'','.'); ?></b></td>
				</tr>
				<tr>
					<td colspan="5"><b>Biaya Operasi</b></td>
				</tr>
				<?php foreach($reportbiaya as $biaya): ?>
				<tr>
					<td width="100" class="text-center"><?php echo $biaya['kode_rekening']; ?></td>
					<td class=""><?php echo $biaya['deskripsi']; ?></td>
					<td width="150" class="text-right"></td>
					<td width="150" class="text-right"><?php echo "Rp.".number_format($biaya['jumlah'],0,'','.'); ?></td>
					<td width="150" class="text-right"></td>
				</tr>
				<?php endforeach; ?>
				<tr>
					<td width="100"></td>
					<td width><b>Jumlah Biaya Produksi</b></td>
					<td width="150" class="text-right"></td>
					<td width="150" class="text-right"></td>
					<td width="150" class="text-right"><?php echo "Rp.".number_format($sumbiaya['jumlah'],0,'','.'); ?></td>
				</tr>
				<tr>
					<td colspan="4"><b>Laba/Rugi Bersih</b></td>
					<td class="text-right"><b><?php echo "Rp.".number_format(($penjualan['jumlah'] - $pembelian['jumlah']) - $sumbiaya['jumlah'],0,'','.'); ?></b></td>
				</tr>
			</table>
			
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