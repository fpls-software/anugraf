<?php if($this->session->flashdata('delete_success')) { ?>
	<script>alert('Berhasil Menghapus Data');</script>
<?php } ?>

<?php if($this->session->flashdata('delete_failed')) { ?>
	<script>alert('Gagal Menghapus Data');;</script>
<?php } ?>
	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-6">
					<h3 class="mb-0">Biaya </h3>
				</div>
				<div class="col-lg-6 text-right">
					<a href="<?php echo base_url("index.php/admin/tambahbiaya"); ?>"><button type="button" class="btn btn-primary btn-sm">Tambah Data Biaya</button></a>
				</div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Kode Rekening</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Deskripsi</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Jenis Biaya</th>
                    <th scope="col" colspan="2">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php 
					$no = 1;
					foreach($databiaya as $biaya) { 
				?>
                  <tr>
					<td width="1">
						<?php echo $no++; ?>
					</td>
                    <th scope="row">
						<?php echo $biaya['kode_rekening']; ?>
                    </th>
                    <td>
						<?php echo $biaya['tanggal']; ?>
                    </td>
					<td>
						<?php echo $biaya['deskripsi']; ?>
                    </td>
                    <td>
						<?php echo "Rp.".number_format($biaya['jumlah'],0,'','.'); ?>
                    </td>
					 <td>
						<?php echo $biaya['jns_biaya']; ?>
                    </td>
					
					<td width="10">
						<a href="<?php echo base_url("index.php/admin/editbiaya/").$biaya['kode_rekening']; ?>"><button type="button" class="btn btn-success btn-sm"><span class="fas fa-edit"></span> Edit</button></a>
					</td>
					<td width="10">
						<a href="<?php echo base_url("index.php/admin/hapusbiaya/").$biaya['kode_rekening']; ?>"><button type="button" class="btn btn-danger btn-sm"><span class="fas fa-delete"></span> Hapus</button></a>
					</td>
                  </tr>
				<?php } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>