	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Data Transaksi</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nama Barang</th>
                    <th scope="col">Jumlah Beli</th>
                    <th scope="col">Tanggal Transaksi</th>
                    <th scope="col">Total Harga</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
					$no = 1;
					foreach($transaksi as $data) {
				  ?>
				  <tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $data['nama']; ?></td>
					<td><?php echo $data['nm_produk']; ?></td>
					<td><?php echo $data['jml_beli']; ?></td>
					<td><?php echo $data['tgl_transaksi']; ?></td>
					<td><?php echo "Rp.".number_format($data['harga'] * $data['jml_beli'],0,'','.'); ?></td>
				  </tr>
				  <?php 
					}
				  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>