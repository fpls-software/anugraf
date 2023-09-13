<?php if($this->session->flashdata('hapus_success')) { ?>
	<script>alert('Berhasil Menghapus Data');</script>
<?php } ?>

<?php if($this->session->flashdata('hapus_failed')) { ?>
	<script>alert('Gagal Menghapus Data');;</script>
<?php } ?>
	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-6">
					<h3 class="mb-0">Produk </h3>
				</div>
				<div class="col-lg-6 text-right">
					<a href="<?php echo base_url("index.php/admin/tambahproduk"); ?>"><button type="button" class="btn btn-primary btn-sm">Tambah Data Produk</button></a>
				</div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Produk</th>
                    <th scope="col">Nama Produk</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah Stok</th>
                    <th scope="col">Jenis</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
					$no = 1;
					foreach($dataproduk as $product) { 
				?>
                  <tr>
					<td width="1">
						<?php echo $no++; ?>
					</td>
                    <th scope="row">
						<?php echo $product['kd_produk']; ?>
                    </th>
                    <td>
						<?php echo $product['nm_produk']; ?>
                    </td>
                    <td>
						<?php echo "Rp.".number_format($product['harga'],0,'','.'); ?>
                    </td>
					 <td>
						<?php echo $product['jml_stok']; ?>
                    </td>
					<td>
						<?php echo $product['jenis']; ?>
					</td>
					<td width="10">
						<a href="<?php echo base_url("index.php/admin/editproduk/").$product['kd_produk']; ?>"><button type="button" class="btn btn-success btn-sm"><span class="fas fa-edit"></span> Edit</button></a>
					</td>
					<td width="10">
						<a href="<?php echo base_url("index.php/admin/hapusproduk/").$product['kd_produk']; ?>"><button type="button" class="btn btn-danger btn-sm"><span class="fas fa-delete"></span> Hapus</button></a>
					</td>
                  </tr>
				<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>