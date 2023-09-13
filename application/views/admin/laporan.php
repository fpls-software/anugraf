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
					<h3 class="mb-0">Laporan Laba Rugi</h3>
				</div>
				
              </div>
            </div>
			<hr/>
            <!-- Content -->
			<div class="container-fluid">
				<p>Filter Laporan</p>
				<form action="<?php echo base_url("index.php/admin/report/");?>" method="get">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							<label class="label-control">Dari Tanggal</label>
							<input type="date" name="from" class="form-control">
						</div>
						<div class="col-lg-6 col-md-6">
							<label class="label-control">Ke Tanggal</label>
							<input type="date" name="to" class="form-control">
						</div>
					</div>
					<br/>
					<button type="submit" class="btn btn-primary">Cetak</button>
				</form>
				<hr/>
			</div>
			<!-- end of content -->
          </div>
        </div>
      </div>