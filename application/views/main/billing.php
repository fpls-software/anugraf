<br/><br/><br/><br/>
<div class="content">
	<div class="container">
		<h3>BILLING</h3>
		<hr/>
		<h3>Belum Lunas</h3>
		<div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Invoice</th>
						<th scope="col">Tanggal Transaksi</th>
						<th scope="col">Nama Produk</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah Beli</th>
						<th scope="col">Total Harga</th>
						<th scope="col">Status</th>
						<th scope="col">Action</th>
					</tr>
                </thead>
				<tbody>
					<?php 
						$no = 1;
						foreach($belumlunas as $billing) {
					?>
						<tr> 
							<td><?php echo $no++; ?></td>
							<td><?php echo $billing['id_transaksi']; ?></td>
							<td><?php echo $billing['tgl_transaksi']; ?></td>
							<td><?php echo $billing['nm_produk']; ?></td>
							<td><?php echo "Rp.".number_format($billing['harga'],0,'','.'); ?></td>
							<td><?php echo $billing['jml_beli']; ?></td>
							<td><?php echo "Rp.".number_format($billing['ttl_harga'],0,'','.'); ?></td>
							<td><?php echo $billing['status']; ?></td>
							<td><a href="<?php echo base_url('index.php/user/konfirmasipembayaran/').$billing['id_transaksi']; ?>"><button type="button" class="btn btn-primary btn-sm">Konfirmasi Pembayaran</button></a></td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<br/>
		<h3>Pembayaran Pending</h3>
		<div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Invoice</th>
						<th scope="col">Tanggal Transaksi</th>
						<th scope="col">Nama Produk</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah Beli</th>
						<th scope="col">Total Harga</th>
						<th scope="col">Keterangan</th>
					</tr>
                </thead>
				<tbody>
					<?php 
						$no = 1;
						foreach($pembayaranpending as $pending) {
					?>
						<tr> 
							<td><?php echo $no++; ?></td>
							<td><?php echo $pending['id_transaksi']; ?></td>
							<td><?php echo $pending['tgl_transaksi']; ?></td>
							<td><?php echo $pending['nm_produk']; ?></td>
							<td><?php echo $pending['harga']; ?></td>
							<td><?php echo $pending['jml_beli']; ?></td>
							<td><?php echo $pending['ttl_harga']; ?></td>
							<td>
								<?php 
									$ket = str_ireplace('pending','Menunggu Verifikasi Admin (Silahkan Tunggu)', $pending['status']);
									echo $ket; 
								?>
							</td>
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
		<br/>
		<h3>Riwayat Pembayaran</h3>
		<div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
					<tr>
						<th scope="col">No</th>
						<th scope="col">Invoice</th>
						<th scope="col">Tanggal Transfer</th>
						<th scope="col">Jumlah Transfer</th>
						<th scope="col">Action</th>
					</tr>
                </thead>
				<tbody>
					<?php 
						$no = 1;
						foreach($riwayatpembayaran as $history) {
					?>
						<tr> 
							<td><?php echo $no++; ?></td>
							<td><?php echo $history['id_transaksi']; ?></td>
							<td><?php echo $history['tgl_transfer']; ?></td>
							<td><b><?php echo "Rp.".number_format($history['jml_transfer'],0,'','.'); ?></b></td>
							<td><a target="_blank" href="<?php echo base_url('index.php/user/cetakpembayaran/').$history['id_transaksi']; ?>"><button type="button" class="btn btn-primary btn-sm">Cetak</button></a></td>
							
						</tr>
					<?php } ?>
				</tbody>
			</table>
		</div>
	</div>
</div>