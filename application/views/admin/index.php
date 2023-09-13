<?php if($this->session->flashdata('success')) { ?>
	<script>alert('Pesanan Telah Diterima');</script>
<?php } ?>

<?php if($this->session->flashdata('failed')) { ?>
	<script>alert('Tidak dapat Menerima Pesanan');;</script>
<?php } ?>

<?php if($this->session->flashdata('konfirmasi_success')) { ?>
	<script>alert('Pembayaran telah Dikonfirmasi');</script>
<?php } ?>

<?php if($this->session->flashdata('konfirmasi_failed')) { ?>
	<script>alert('Tidak dapat Meng-Konfirmasi Pembayaran');;</script>
<?php } ?>

<?php if($this->session->flashdata('tolaksuccess')) { ?>
	<script>alert('Pesanan Telah Ditolak');</script>
<?php } ?>

<?php if($this->session->flashdata('tolakfailed')) { ?>
	<script>alert('Tidak dapat Menolak Pesanan');;</script>
<?php } ?>
	
	  
	  
	<div class="container-fluid">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Pembayaran</h3>
                </div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Invoice</th>
                    <th scope="col">Customer</th>
                    <th scope="col">tgl_transfer</th>
                    <th scope="col">Bank</th>
                    <th scope="col">Nmr Rekening</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
				<?php
					$no = 1;
					foreach($pembayaran as $data1) {
					if(empty($data1)) {
				?>
					<tr>
						<td colspan="7">Tidak Ada Data</td>
					</tr>
				<?php 
					}
					else {
				?>
					<tr>
						<td><?php echo $no++; ?></td>
						<td><?php echo $data1['id_transaksi']; ?></td>
						<td><?php echo $data1['nm_pemilik']; ?></td>
						<td><?php echo $data1['tgl_transfer']; ?></td>
						<td><?php echo $data1['nm_bank']; ?></td>
						<td><?php echo $data1['nmr_rekening']; ?></td>
						<td><a href="<?php echo base_url("index.php/admin/pembayaran/").$data1['id_transaksi'];?>"><button type="button" class="btn btn-primary btn-sm">Lihat Detail</button></a></td>
					</tr>
				<?php 
					} }
				?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
	</div>
	<br/><br/><br/>