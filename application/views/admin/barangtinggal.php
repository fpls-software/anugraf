<?php if($this->session->flashdata('success')) { ?>
	<script>alert('Pesanan Telah Diambil');</script>
<?php } ?>

<?php if($this->session->flashdata('failed')) { ?>
	<script>alert('Error');;</script>
<?php } ?>
	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Pesanan yang Belum diambil </h3>
				</div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">ID Transaksi</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Jumlah Beli</th>
                    <th scope="col">Harga Total</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
					$no = 1;
					foreach($barangtinggal as $data) { 
				?>
                  <tr>
					<td width="1">
						<?php echo $no++; ?>
					</td>
                    <th scope="row">
						<?php echo $data['id_transaksi']; ?>
                    </th>
                    <td>
						<?php echo $data['nama']; ?>
                    </td>
                    <td>
						<?php echo $data['nm_produk']; ?>
                    </td>
					 <td>
						<?php echo $data['jml_beli']; ?>
                    </td>
					<td>
						<?php echo "Rp.".number_format($data['harga'] * $data['jml_beli'],0,'','.'); ?>
					</td>
					<td width="10">
						<a href="<?php echo base_url("index.php/admin/ambilpesanan/").$data['id_transaksi']; ?>"><button type="button" class="btn btn-success btn-sm"><span class="fas fa-check"></span> Ambil Pesanan</button></a>
					</td>
                  </tr>
				<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>