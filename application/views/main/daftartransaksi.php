<br/><br/><br/><br/>
<div class="content">
	<div class="container">
		<h3>Transaksi Pending</h3>
		<div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Transaksi</th>
						<th scope="col">Tanggal Transaksi</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah Beli</th>
						<th scope="col">Total Harga</th>
						<th scope="col">Status</th>
					</tr>
                </thead>
				<tbody>
					<?php 
						$no=1;
						foreach($transaksipending as $pending) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $pending['id_transaksi']; ?></td>
						<td><?php echo $pending['tgl_transaksi']; ?></td>
						<td><?php echo $pending['nm_produk']; ?></td>
						<td><?php echo "Rp.".number_format($pending['harga'],0,'','.'); ?></td>
						<td><?php echo $pending['jml_beli']; ?></td>
						<td><?php echo "Rp.".number_format($pending['harga'] * $pending['jml_beli'],0,'','.'); ?></td>
						<td><?php echo $pending['status']; ?></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
		<br/><br/>
		
		<h3>Transaksi Diterima</h3>
		<div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Transaksi</th>
						<th scope="col">Tanggal Transaksi</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah Beli</th>
						<th scope="col">Total Harga</th>
						<th scope="col">Status</th>
						<th scope="col" colspan="2">Struk</th>
					</tr>
                </thead>
				<tbody>
					<?php 
						$no=1;
						foreach($transaksiditerima as $diterima) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $diterima['id_transaksi']; ?></td>
						<td><?php echo $diterima['tgl_transaksi']; ?></td>
						<td><?php echo $diterima['nm_produk']; ?></td>
						<td><?php echo "Rp.".number_format($diterima['harga'],0,'','.'); ?></td>
						<td><?php echo $diterima['jml_beli']; ?></td>
						<td><?php echo "Rp.".number_format($diterima['harga'] * $diterima['jml_beli'],0,'','.'); ?></td>
						<td><?php echo $diterima['status']; ?></td>
						<td><a href="<?php echo base_url("index.php/user/struk/").$diterima['id_transaksi']; ?>"><button type="button" class="btn btn-primary btn-sm">Download</button></a></td>
						<td><a href="<?php echo base_url("index.php/user/billing/"); ?>"><button type="button" class="btn btn-primary btn-sm">Billing</button></a></td>
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
		<br/><br/>
		
		<h3>Transaksi Ditolak</h3>
		<div class="table-responsive">
            <table class="table align-items-center table-flush">
                <thead class="thead-light">
					<tr>
						<th scope="col">No</th>
						<th scope="col">ID Transaksi</th>
						<th scope="col">Tanggal Transaksi</th>
						<th scope="col">Nama Barang</th>
						<th scope="col">Harga</th>
						<th scope="col">Jumlah Beli</th>
						<th scope="col">Total Harga</th>
						<th scope="col">Status</th>
						<th scope="col">Catatan</th>
						
					</tr>
                </thead>
				<tbody>
					<?php 
						$no=1;
						foreach($transaksiditolak as $ditolak) {
					?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $ditolak['id_transaksi']; ?></td>
						<td><?php echo $ditolak['tgl_transaksi']; ?></td>
						<td><?php echo $ditolak['nm_produk']; ?></td>
						<td><?php echo "Rp.".number_format($ditolak['harga'],0,'','.'); ?></td>
						<td><?php echo $ditolak['jml_beli']; ?></td>
						<td><?php echo "Rp.".number_format($ditolak['harga'] * $ditolak['jml_beli'],0,'','.'); ?></td>
						<td><?php echo $ditolak['status']; ?></td>
						<td><?php echo $ditolak['catatan']; ?></td>
						
					</tr>
					<?php
						}
					?>
				</tbody>
			</table>
		</div>
	</div>
</div>