<?php 
Class User_Model extends CI_Model {
	public function login($username, $password_hash) {
		$condition	= "username="."'".$username."'". " AND "."password="."'".$password_hash."'";
		$select		= array('username', 'password');
		$this->db->select($select);
		$this->db->from('tb_customer');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function validusername($username) {
		$condition	= "username="."'".$username."'";
		$select		= array('username');
		$this->db->select($select);
		$this->db->from('tb_customer');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function validanswer($username, $s_question, $s_answer) {
		$condition	= "username="."'".$username."'". " AND "."s_question="."'".$s_question."'". " AND "."s_answer="."'".$s_answer."'";
		$select		= array('username', 's_question', 's_answer');
		$this->db->select($select);
		$this->db->from('tb_customer');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function gantipassword($username, $password_hash) {
		$ganti = $this->db->query("UPDATE tb_customer SET password='$password_hash' WHERE username='$username'");
		return $ganti;
	}
	public function datasecurity($username) {
		$load = $this->db->query("SELECT * FROM tb_customer WHERE username='$username'");
		return $load->result_array();
	}
	public function register($nik, $nama, $username, $password_hash, $pekerjaan) {
		$data				= array(
			'nik'			=> $nik,
			'nama'			=> $nama,
			'username'		=> $username,
			'password'		=> $password_hash,
			'pekerjaan'		=> $pekerjaan
		);
		$this->db->insert("tb_customer", $data);
	}
	public function updateuser($nik,$nama,$pekerjaan,$hp,$alamat,$desa,$kecamatan,$kabupaten,$s_question,$s_answer,$latitude,$longitude) {
		$update = $this->db->query("
			UPDATE tb_customer SET
			nama='$nama',
			pekerjaan='$pekerjaan',
			hp='$hp',
			alamat='$alamat',
			desa='$desa',
			kecamatan='$kecamatan',
			kabupaten='$kabupaten',
			s_question='$s_question',
			s_answer='$s_answer',
			latitude='$latitude',
			longitude='$longitude'
			WHERE nik='$nik'
		");
		return $update;
	}
	public function profile($username) {
		$load = $this->db->query("SELECT * FROM tb_customer WHERE username='$username'");
		return $load->result_array();
	}
	public function kategori() {
		$load = $this->db->query("SELECT distinct(jenis) FROM tb_produk");
		return $load->result_array();
	}
	public function product() {
		$load = $this->db->query("SELECT * FROM tb_produk");
		return $load->result_array();
	}
	public function kategoriproduct($jenis) {
		$load = $this->db->query("SELECT * FROM tb_produk WHERE jenis='$jenis'");
		return $load->result_array();
	}
	public function detailproduct($kd_produk) {
		$load = $this->db->query("SELECT * FROM tb_produk WHERE kd_produk='$kd_produk'");
		return $load->result_array();
	}
	public function kontak() {
		$load = $this->db->query("SELECT * FROM tb_kontak");
		return $load->result_array();
	}
	public function beliproduk($id_transaksi, $nik, $kd_produk, $tgl_transaksi, $jml_beli, $sts_delivery) {
		$data				= array(
			'id_transaksi'	=> $id_transaksi,
			'nik'			=> $nik,
			'kd_produk'		=> $kd_produk,
			'tgl_transaksi'	=> $tgl_transaksi,
			'jml_beli'		=> $jml_beli,
			'status'		=> 'pending',
			'sts_delivery'	=> $sts_delivery
		);
		$this->db->insert("tb_transaksi", $data);
	}
	public function pembayaran($id_transaksi) {
		$data 				= array(
			'id_transaksi'	=> $id_transaksi,
			'status'		=> 'belumlunas'
		);
		$this->db->insert('tb_pembayaran', $data);
	}
	public function belumlunas($username) {
		$load = $this->db->query("SELECT * FROM view_pembayaran WHERE username='$username' AND status='belumlunas'");
		return $load->result_array();
	}
	public function pembayaranpending($username) {
		$load = $this->db->query("SELECT * FROM view_pembayaran WHERE username='$username' AND status='pending'");
		return $load->result_array();
	}
	public function riwayatpembayaran($username) {
		$load = $this->db->query("SELECT * FROM view_pembayaran WHERE username='$username' AND status='lunas'");
		return $load->result_array();
	}
	public function cetakpembayaran($id_transaksi) {
		$load = $this->db->query("SELECT * FROM view_pembayaran WHERE id_transaksi='$id_transaksi'");
		return $load->result_array();
	}
	public function transaksipending($username) {
		$load = $this->db->query("
			SELECT * FROM
			tb_customer INNER JOIN tb_transaksi ON tb_customer.nik = tb_transaksi.nik
			INNER JOIN tb_produk ON tb_produk.kd_produk = tb_transaksi.kd_produk
			WHERE tb_transaksi.status='pending' AND tb_customer.username='$username'
		");
		return $load->result_array();
	}
	public function transaksiditolak($username) {
		$load = $this->db->query("
			SELECT * FROM
			tb_customer INNER JOIN tb_transaksi ON tb_customer.nik = tb_transaksi.nik
			INNER JOIN tb_produk ON tb_produk.kd_produk = tb_transaksi.kd_produk
			WHERE tb_transaksi.status='ditolak' AND tb_customer.username='$username'
			ORDER BY tb_transaksi.id_transaksi DESC
		");
		return $load->result_array();
	}
	public function transaksiditerima($username) {
		$load = $this->db->query("
			SELECT * FROM
			tb_customer INNER JOIN tb_transaksi ON tb_customer.nik = tb_transaksi.nik
			INNER JOIN tb_produk ON tb_produk.kd_produk = tb_transaksi.kd_produk
			WHERE tb_transaksi.status='diterima' AND tb_customer.username='$username'
			ORDER BY tb_transaksi.id_transaksi DESC
		");
		return $load->result_array();
	}
	public function transaksi($id_transaksi) {
		$load = $this->db->query("
			SELECT * FROM
			tb_customer INNER JOIN tb_transaksi ON tb_customer.nik = tb_transaksi.nik
			INNER JOIN tb_produk ON tb_produk.kd_produk = tb_transaksi.kd_produk
			WHERE tb_transaksi.id_transaksi = '$id_transaksi'
			ORDER BY tb_transaksi.id_transaksi DESC
		");
		return $load->result_array();
	}
	public function updatestok($kd_produk, $jml_stok) {
		$update = $this->db->query("UPDATE tb_produk SET jml_stok='$jml_stok' WHERE kd_produk='$kd_produk'");
		return $update;
	}
	public function materi() {
		$load = $this->db->query("SELECT * FROM tb_materi");
		return $load->result_array();
	}
	public function infolahan() {
		$load = $this->db->query("SELECT * FROM tb_lahan");
		return $load->result_array();
	}
	public function simpanpembayaran($id_transaksi,$nmr_rekening,$nm_bank,$nm_pemilik,$jml_transfer ,$tgl_transfer,$gambar) {
		$bayar	= $this->db->query("UPDATE tb_pembayaran SET nmr_rekening='$nmr_rekening', nm_bank='$nm_bank', nm_pemilik='$nm_pemilik', jml_transfer='$jml_transfer' ,tgl_transfer='$tgl_transfer', bukti='$gambar', status='pending' WHERE id_transaksi='$id_transaksi'");
		return $bayar;
	}
	public function video() {
		$load = $this->db->query("SELECT * FROM tb_video ORDER BY id_video DESC");
		return $load->result_array();
	}
	public function konfirmasitransaksi($id_transaksi) {
		$load = $this->db->query("SELECT * FROM view_transaksi WHERE id_transaksi='$id_transaksi'");
		return $load->result_array(); 
		
	}
}
?>