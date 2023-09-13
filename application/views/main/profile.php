<?php if($this->session->flashdata('success')) { ?>
	<script>alert('Profile Anda Berhasil Diperbarui');</script>
<?php } ?>
<?php if($this->session->flashdata('failed')) { ?>
	<script>alert('Tidak Dapat Memberparui Profile Anda');</script>
<?php } ?>
<?php foreach($akun as $profile) {} ?>
<br/><br/><br/><br/>
<div class="content">
	<div class="container">
		<h2>PROFILE</h2>
		<form role="form" action="<?php echo base_url("index.php/user/updateuser/"); ?>" method="post">
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
				<div class="card-header">
					<h3>Data Diri</h3>
				</div>
				<div class="card-content produk-content">
				<label class="label-control">Nomor KTP :</label>
                <div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nomor KTP" name="nik" type="text" value="<?php echo $profile['nik']; ?>"  readonly required>
                  </div>
                </div>
				<label class="label-control">Nama :</label>
				<div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Nama" name="nama" type="text" value="<?php echo $profile['nama']; ?>" required>
                  </div>
                </div>
				<label class="label-control">Username :</label>
				<div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input class="form-control" placeholder="Username" name="username" type="text" value="<?php echo $profile['username']; ?>" required readonly>
                  </div>
                </div>
				<label class="label-control">Pekerjaan :</label>
				<div class="form-group">
                  <div class="input-group input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-app"></i></span>
                    </div>
                    <input class="form-control" placeholder="Pekerjaan" name="pekerjaan" type="text" value="<?php echo $profile['pekerjaan']; ?>">
                  </div>
                </div>
				</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h3>Alamat Lengkap</h3>
					</div>
					<div class="card-content produk-content">
						<label class="label-control">Alamat Jln :</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-maps"></i></span>
								</div>
								<input class="form-control" placeholder="Alamat" name="alamat" type="text" value="<?php echo $profile['alamat']; ?>" required>
							</div>
						</div>
						<label class="label-control">Desa/Kelurahan :</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-map"></i></span>
								</div>
								<input class="form-control" placeholder="Desa/Kelurahan" name="desa" type="text" value="<?php echo $profile['desa']; ?>" required>
							</div>
						</div>
						<label class="label-control">Kecamatan :</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-map"></i></span>
								</div>
								<input class="form-control" placeholder="Kecamatan" name="kecamatan" type="text" value="<?php echo $profile['kecamatan']; ?>" required>
							</div>
						</div>
						<label class="label-control">Kabupaten/Kota :</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-map"></i></span>
								</div>
								<input class="form-control" placeholder="Kabupaten/Kota" name="kabupaten" type="text" value="<?php echo $profile['kabupaten']; ?>" required>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-12">
				<div class="card">
					<div class="card-header">
						<h3>Kontak</h3>
					</div>
					<div class="card-content produk-content">
						<label class="label-control">Nomor HP</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="fas fa-phone"></i></span>
								</div>
								<input class="form-control" placeholder="Nomor HP" name="hp" type="text" value="<?php echo $profile['hp']; ?>" required>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br/>
		<div class="row">
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h3>Pertanyaan Keamanan</h3>
					</div>
					<div class="card-content produk-content">
						<p><b><i>Fitur ini digunakan untuk mempermudah anda untuk me-reset Password anda jika sewaktu-waktu anda lupa Password anda sendiri</i></b></p>
						<label class="label-control">Pertanyaan :</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-map"></i></span>
								</div>
								<input class="form-control" placeholder="ex: Apakah hewan peliharaan pertama saya?" name="s_question" type="text" value="<?php echo $profile['s_question']; ?>" required>
							</div>
						</div>
						<label class="label-control">Jawaban :</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-map"></i></span>
								</div>
								<input class="form-control" placeholder="ex: Kucing" name="s_answer" type="text" value="<?php echo $profile['s_answer']; ?>" required>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="card">
					<div class="card-header">
						<h3>Koordinat Pada Google Maps</h3>
					</div>
					<div class="card-content produk-content">
						<label class="label-control">Latitude :</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-map"></i></span>
								</div>
								<input class="form-control" placeholder="Latitude" name="latitude" type="text" value="<?php echo $profile['latitude']; ?>">
							</div>
						</div>
						<label class="label-control">Longitude :</label>
						<div class="form-group">
							<div class="input-group input-group-alternative mb-3">
								<div class="input-group-prepend">
									<span class="input-group-text"><i class="ni ni-map"></i></span>
								</div>
								<input class="form-control" placeholder="Longitude" name="longitude" type="text" value="<?php echo $profile['longitude']; ?>">
							</div>
						</div>
						<br/>
						<button type="submit" class="btn btn-primary"> Perbarui Profile</button>
					</div>
				</div>
			</div>
		</div>
		</form>
	</div>
</div>