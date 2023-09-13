	<div class="container-fluid mt--7">
      <div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
				<div class="col-lg-12">
					<h3 class="mb-0">Daftar Pelanggan</h3>
				</div>
              </div>
            </div>
            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nomor KTP</th>
                    <th scope="col">Nama Pelanggan</th>
                    <th scope="col">Pekerjaan</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
					$no = 1;
					foreach($member as $pelanggan) {
				  ?>
				  <tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $pelanggan['nik']; ?></td>
					<td><?php echo $pelanggan['nama']; ?></td>
					<td><?php echo $pelanggan['pekerjaan']; ?></td>
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