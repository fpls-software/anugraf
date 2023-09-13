
<?php 
	foreach($detailpesanan as $data){}
?>
	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Detail Pesanan</h3>
				</div>
              </div>
            </div>
            <!-- CONTENT -->
			<div class="produk-content">
				<div class="row">
				<div class="col-lg-6">
				<table border="0">
					<tr>
						<td>ID Transaksi</td>
						<td> : </td>
						<td><?php echo $data['id_transaksi']; ?></td>
					</tr>
					<tr>
						<td>Pembeli</td>
						<td> : </td>
						<td><?php echo $data['nama']; ?></td>
					</tr>
					<tr>
						<td>Alamat Lengkap</td>
						<td> : </td>
						<td><?php echo $data['alamat'].", ".$data['desa'].", ".$data['kecamatan'].", ".$data['kabupaten']; ?></td>
					</tr>
					<tr>
						<td>Nama Produk</td>
						<td> : </td>
						<td><?php echo $data['nm_produk']; ?></td>
					</tr>
					<tr>
						<td>Jumlah Beli</td>
						<td> : </td>
						<td><?php echo $data['jml_beli']; ?></td>
					</tr>
				</table>
				</div>
				<div class="col-lg-6">
					<h2 class="text-center">Total Harga <br/>
						<?php echo "Rp.".number_format($data['harga'] * $data['jml_beli'],0,'','.'); ?>
					</h2>
				</div>
			</div>
          </div>
		  <div class="card-footer">
			<div class="row">
				<div class="col-lg-6 text-center">
					<form action="<?php echo base_url("index.php/admin/terimapesanan"); ?>" method="post">
						<input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi']; ?>"/> <br/>
						<button type="submit" class="btn btn-success">Terima Pesanan</button>
					</form>
				</div>
				<div class="col-lg-6 text-center">
					<br/>
					<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Tolak Pesanan</button>
					<!-- The Modal -->
					<div class="modal text-left" id="myModal">
						<div class="modal-dialog">
							<div class="modal-content">
      
								<!-- Modal body -->
								<div class="modal-body">
									<form action="<?php echo base_url("index.php/admin/tolakpesanan"); ?>" method="post">
										<input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi']; ?>"/> 
										<input type="hidden" name="kd_produk" value="<?php echo $data['kd_produk']; ?>"/> 
										<input type="hidden" name="jml_beli" value="<?php echo $data['jml_beli']; ?>"/> 
										<input type="hidden" name="jml_stok" value="<?php echo $data['jml_stok']; ?>"/> 
										<label class="label-control">Catatan (Alasan di Tolak)</label>
										<textarea rows="3" name="catatan" class="form-control"></textarea>
										<br/>
										<button type="submit" class="btn btn-danger">Tolak Pesanan</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		  </div>
        </div>
      </div>