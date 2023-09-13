<?php foreach($pembayaran as $data) {} ?>	
	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Detail Pembayaran</h3>
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
						<td>Produk</td>
						<td> : </td>
						<td><?php echo $data['nm_produk']; ?></td>
					</tr>
					<tr>
						<td>Pembeli</td>
						<td> : </td>
						<td><?php echo $data['nm_pemilik']; ?></td>
					</tr>
					<tr>
						<td>Bank</td>
						<td> : </td>
						<td><?php echo $data['nm_bank']; ?></td>
					</tr>
					<tr>
						<td>Nomor Rekening</td>
						<td> : </td>
						<td><?php echo $data['nmr_rekening']; ?></td>
					</tr>
					<tr>
						<td>Tanggal Transfer</td>
						<td> : </td>
						<td><?php echo $data['tgl_transfer']; ?></td>
					</tr>
					<tr>
						<td>Jumlah Transfer</td>
						<td> : </td>
						<td><?php echo "Rp. ".number_format($data['jml_transfer'],0,'.',''); ?></td>
					</tr>
				</table>
				</div>
				<div class="col-lg-6">
					<h2 class="text-center">Bukti Transfer<br/>
						<a href="<?php echo base_url().'assets/img/pembayaran/'.$data['bukti']; ?>" target="_blank"><img width='100%' src="<?php echo base_url().'assets/img/pembayaran/'.$data['bukti']; ?>"/></a>
					</h2>
				</div>
			</div>
          </div>
		  <div class="card-footer">
			<div class="row">
				<div class="col-lg-12 text-center">
					<form action="<?php echo base_url("index.php/admin/konfirmasipembayaran"); ?>" method="post">
						<input type="hidden" name="id_transaksi" value="<?php echo $data['id_transaksi']; ?>"/> <br/>
						<button type="submit" class="btn btn-success">Konfirmasi Pembayaran</button>
					</form>
				</div>
				
			</div>
		  </div>
        </div>
      </div>