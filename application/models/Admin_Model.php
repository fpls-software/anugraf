<?php 
Class Admin_Model extends CI_Model {
	public function login($username, $password_hash) {
		$condition	= "username="."'".$username."'". " AND "."password="."'".$password_hash."'";
		$select		= array('username', 'password');
		$this->db->select($select);
		$this->db->from('tb_admin');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function validpassword($passwordlama_hash) {
		$condition	= "password="."'".$passwordlama_hash."'";
		$select		= array('password');
		$this->db->select($select);
		$this->db->from('tb_admin');
		$this->db->where($condition);
		$login 		= $this->db->get();
		
		if($login->num_rows() > 0) {
			return true;
		}
		else {
			return false;
		}
	}
	public function updatepassword($passwordbaru_hash) {
		$update = $this->db->query("UPDATE tb_admin SET password='$passwordbaru_hash' WHERE username='admin'");
		return $update;
	}
	public function datasuplier() {
		$load = $this->db->query("SELECT * FROM tb_suplier INNER JOIN tb_produk ON tb_produk.kd_produk = tb_suplier.kd_produk");
		return $load->result_array();
	}
	public function dataspesificsuplier($id_suplier) {
		$load = $this->db->query("SELECT * FROM tb_suplier INNER JOIN tb_produk ON tb_produk.kd_produk = tb_suplier.kd_produk WHERE id_suplier='$id_suplier'");
		return $load->result_array();
	}
	public function simpansuplier($nm_suplier,$kd_produk,$satuan,$harga,$jml_beli,$tgl_beli) {
		$data 				= array(
			'nm_suplier'	=> $nm_suplier,
			'kd_produk'		=> $kd_produk,
			'satuan'		=> $satuan,
			'harga'			=> $harga,
			'jml_beli'		=> $jml_beli,
			'tgl_beli'		=> $tgl_beli
		);
		$this->db->insert("tb_suplier", $data);
	}
	public function updatesuplay($kd_produk, $jml_beli) {
		$update = $this->db->query("UPDATE tb_produk SET jml_stok=jml_stok+$jml_beli WHERE kd_produk='$kd_produk'");
		return $udpate;
	}
	
	public function updatesuplier($id_suplier,$nm_suplier,$satuan,$harga,$tgl_beli) {
		$update = $this->db->query("UPDATE tb_suplier SET nm_suplier='$nm_suplier',satuan='$satuan',harga='$harga',tgl_beli='$tgl_beli' WHERE id_suplier='$id_suplier'");
		return $update;
	}
	public function hapussuplier($id_suplier){
		$delete = $this->db->query("DELETE FROM tb_suplier WHERE id_suplier='$id_suplier'");
		return $delete;
	} 
	public function dataproduk() {
		$load = $this->db->query("SELECT * FROM tb_produk");
		return $load->result_array();
	}
	public function produk($kd_produk) {
		$load = $this->db->query("SELECT * FROM tb_produk WHERE kd_produk='$kd_produk'");
		return $load->result_array();
	}
	public function simpanproduk($kd_produk, $nm_produk ,$harga, $jenis, $gambar) {
		$data			= array(
			'kd_produk'	=> $kd_produk,
			'nm_produk'	=> $nm_produk,
			'harga'		=> $harga,
			'jenis'		=> $jenis,
			'gambar'	=> $gambar
		);
		$this->db->insert("tb_produk", $data);
	}
	public function updateproduk($kd_produk,$nm_produk,$harga,$jenis) {
		$upload = $this->db->query("
			UPDATE tb_produk SET nm_produk='$nm_produk', harga='$harga',jenis='$jenis' WHERE kd_produk='$kd_produk'
		");
		return $upload;
	}
	public function hapusproduk($kd_produk) {
		$delete = $this->db->query("DELETE FROM tb_produk WHERE kd_produk='$kd_produk'");
		return $delete;
	}
	public function hitungpelanggan() {
		$load = $this->db->query("SELECT COUNT(nik) AS jml_pelanggan FROM tb_customer");
		return $load->result_array();
	}
	public function hitungtransaksi() {
		$load = $this->db->query("SELECT COUNT(id_pembayaran) AS jml_transaksi FROM tb_pembayaran WHERE status='lunas'");
		return $load->result_array();
	}
	public function hitungprofit() {
		$load = $this->db->query("SELECT SUM(tb_pembayaran.jml_transfer) AS jml_profit 
		FROM tb_pembayaran WHERE status='lunas'");
		return $load->result_array();
	}
	public function kontak() {
		$load = $this->db->query("SELECT * FROM tb_kontak");
		return $load->result_array();
	}
	public function dataprofile() {
		$load = $this->db->query("SELECT * FROM tb_profile");
		return $load->result_array();
	}
	public function simpankontak($nm_kontak, $kontak) {
		$data			= array(
			'nm_kontak'	=> $nm_kontak,
			'kontak'	=> $kontak
		);
		$this->db->insert("tb_kontak", $data);
	}
	public function updatekontak($id_kontak, $nm_kontak, $kontak) {
		$update = $this->db->query("UPDATE tb_kontak SET nm_kontak='$nm_kontak', kontak='$kontak' WHERE id_kontak='$id_kontak'");
		return $udpate;
	}
	public function datakontak($id_kontak) {
		$load = $this->db->query("SELECT * FROM tb_kontak WHERE id_kontak='$id_kontak'");
		return $load->result_array();
	}
	public function hapuskontak($id_kontak) {
		$hapus = $this->db->query("DELETE FROM tb_kontak WHERE id_kontak='$id_kontak'");
		return $hapus;
	}
	public function member() {
		$load = $this->db->query("SELECT * FROM tb_customer");
		return $load->result_array();
	}
	public function transaksi() {
		$load = $this->db->query("
			SELECT * FROM 
			view_pembayaran WHERE status='lunas' ORDER BY nm_produk ASC
		");
		return $load->result_array();
	}
	public function pesanan() {
		$load = $this->db->query("
			SELECT * FROM 
			tb_customer INNER JOIN tb_transaksi ON tb_customer.nik = tb_transaksi.nik
			INNER JOIN tb_produk ON tb_produk.kd_produk = tb_transaksi.kd_produk
			WHERE status='pending'
		");
		return $load->result_array();
	}
	public function detailpesanan($id_transaksi) {
		$load = $this->db->query("
			SELECT * FROM 
			tb_customer INNER JOIN tb_transaksi ON tb_customer.nik = tb_transaksi.nik
			INNER JOIN tb_produk ON tb_produk.kd_produk = tb_transaksi.kd_produk
			WHERE id_transaksi='$id_transaksi'
		");
		return $load->result_array();
	}
	public function barangtinggal() {
		$load = $this->db->query("
			SELECT * FROM 
			tb_customer INNER JOIN tb_transaksi ON tb_customer.nik = tb_transaksi.nik
			INNER JOIN tb_produk ON tb_produk.kd_produk = tb_transaksi.kd_produk
			WHERE sts_ambil = 'belumdiambil'
		");
		return $load->result_array();
	}
	public function ambilpesanan($id_transaksi) {
		$update = $this->db->query("UPDATE tb_transaksi SET sts_ambil='diambil' WHERE id_transaksi='$id_transaksi'");
		return $update;
	}
	public function terimapesanan($id_transaksi,$status,$sts_ambil) {
		$update = $this->db->query("
			UPDATE tb_transaksi SET status='$status', sts_ambil='$sts_ambil' WHERE id_transaksi='$id_transaksi'
		");
		return $update;
	}
	public function konfirmasipembayaran($id_transaksi) {
		$update = $this->db->query("UPDATE tb_pembayaran SET status='lunas' WHERE id_transaksi='$id_transaksi'");
		return $update;
	}
	public function updatestok($kd_produk, $jml_stok) {
		$update = $this->db->query("
			UPDATE tb_produk SET jml_stok='$jml_stok' WHERE kd_produk='$kd_produk'
		");
		return $update;
	}
	public function tolakpesanan($id_transaksi, $catatan) {
		$update = $this->db->query("
			UPDATE tb_transaksi SET status='ditolak', catatan='$catatan' WHERE id_transaksi='$id_transaksi'
		");
		return $update;
	}
	public function simpankoordinat($latitude, $longitude) {
		$update = $this->db->query("
			UPDATE tb_profile SET latitude='$latitude', longitude='$longitude'
		");
		return $update;
	}
	public function simpandeskripsi($tentangkami) {
		$update = $this->db->query("
			UPDATE tb_profile SET tentangkami='$tentangkami'
		");
		return $update;
	}
	public function databanner() {
		$load = $this->db->query("SELECT * FROM tb_banner");
		return $load->result_array();
	}
	public function simpanbanner($banner) {
		$data			= array(
			'banner'	=> $banner
		);
		$this->db->insert("tb_banner", $data);
	}
	public function hapusbanner($id_banner) {
		$hapus = $this->db->query("DELETE FROM tb_banner WHERE id_banner='$id_banner'");
		return $hapus;
	}
	public function publishmateri($jdl_materi, $materi) {
		$data 		 		= array(
			'jdl_materi'	=> $jdl_materi,
			'materi'		=> $materi
		);
		$this->db->insert("tb_materi", $data);
	}
	public function simpanlahan($keuntungan, $kerugian, $keterangan, $lahan) {
		$data			 = array(
			'keuntungan' => $keuntungan,
			'kerugian'	 => $kerugian,
			'keterangan' => $keterangan,
			'lahan'		 => $lahan
		);
		$this->db->insert("tb_lahan", $data);
	}
	public function pembayaran() {
		$load = $this->db->query("SELECT * FROM view_pembayaran WHERE status='pending'");
		return $load->result_array();
	}
	public function simpanbiaya($kode_rekening,$tanggal,$deskripsi,$jumlah,$jns_biaya) {
		$str = [
			'kode_rekening'	=> $kode_rekening,
			'tanggal'		=> $tanggal,
			'deskripsi'		=> $deskripsi,
			'jumlah'		=> $jumlah,
			'jns_biaya'		=> $jns_biaya
		];
		$this->db->insert("keuangan", $str);
	}
	public function databiaya() {
		$str = $this->db->query("SELECT * FROM keuangan");
		return $str->result_array();
	}
	public function databiayaproduksi($kode_rekening) {
		$str = $this->db->query("SELECT * FROM keuangan WHERE kode_rekening='$kode_rekening'");
		return $str->result_array();
	}
	public function updatebiaya($kode_rekening,$tanggal,$deskripsi,$jumlah,$jns_biaya) {
		$update = $this->db->query("
			UPDATE keuangan SET
			tanggal='$tanggal',
			deskripsi='$deskripsi',
			jumlah='$jumlah',
			jns_biaya='$jns_biaya'
			WHERE kode_rekening='$kode_rekening'
		");
		return $update;
	}
	public function hapusbiaya($kode_rekening) {
		$delete = $this->db->query("DELETE FROM keuangan WHERE kode_rekening='$kode_rekening'");
		return $delete;
	}
	
	//QUERY REPORT
	public function reportpenjualan($from,$to) {
		$load = $this->db->query("SELECT SUM(jml_transfer) AS jumlah FROM view_pembayaran WHERE tgl_transfer BETWEEN '$from' AND '$to';");
		return $load->result_array();
	}
	public function reportbiaya($from,$to) {
		$load = $this->db->query("SELECT * FROM keuangan WHERE tanggal BETWEEN '$from' AND '$to'");
		return $load->result_array();
	}
	public function reportsumbiaya($from,$to) {
		$load = $this->db->query("SELECT SUM(jumlah) as jumlah FROM keuangan WHERE tanggal BETWEEN '$from' AND '$to'");
		return $load->result_array();
	}
	public function reportpembelian($from,$to) {
		$load = $this->db->query("SELECT SUM(harga*jml_beli) as jumlah FROM tb_suplier WHERE tgl_beli BETWEEN '$from' AND '$to'");
		return $load->result_array();
	}
	public function datamateri() {
		$load = $this->db->query("SELECT * FROM tb_materi ORDER BY id_materi DESC");
		return $load->result_array();
	}
	public function dataspesificmateri($id_materi) {
		$load = $this->db->query("SELECT * FROM tb_materi WHERE id_materi='$id_materi'");
		return $load->result_array();
	}
	public function updatemateri($id_materi, $jdl_materi,$materi) {
		$update = $this->db->query("UPDATE tb_materi SET jdl_materi='$jdl_materi', materi='$materi' WHERE id_materi='$id_materi'");
		return $update;
	}
	public function hapusmateri($id_materi) {
		$delete = $this->db->query("DELETE FROM tb_materi WHERE id_materi='$id_materi'");
		return $delete;
	}
	public function hapusvideo($id_video) {
		$delete = $this->db->query("DELETE FROM tb_video WHERE id_video='$id_video'");
		return $delete;
	}
	public function materivideo() {
		$load = $this->db->query("SELECT * FROM tb_video ORDER BY id_video DESC LIMIT 10");
		return $load->result_array();
	}
	public function videos($id_video) {
		$load = $this->db->query("SELECT * FROM tb_video WHERE id_video='$id_video'");
		return $load->result_array();
	}
	public function simpanvideo($judul,$video,$deskripsi) {
		$data 			= array(
			'judul'		=> $judul,
			'video'		=> $video,
			'deskripsi'	=> $deskripsi
		);
		$this->db->insert("tb_video", $data);
		
	}
	public function updatevideo($id_video,$judul,$video,$deskripsi) {
		$update = $this->db->query("UPDATE tb_video SET judul='$judul',video='$video',deskripsi='$deskripsi' WHERE id_video='$id_video'");
		return $update;
	}
}
?>