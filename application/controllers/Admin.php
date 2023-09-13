<?php 
Class Admin extends CI_Controller {
	public function __construct() 
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form','url'));
		$this->load->model(array('Admin_Model'));
		$this->load->library(array('session'));
	}
	public function login() {
		if($this->session->userdata('admin')) {
			redirect('admin/index');
		}
		$this->load->view('admin/head');
		$this->load->view('admin/login');
		$this->load->view('admin/footer');
	}
	public function logout() {
		$this->session->unset_userdata("admin");
		redirect('admin/login');
	}
	public function loginvalidation() {
		$username				= $this->input->post('username', TRUE);
		$password				= $this->input->post('password', TRUE);
		$password_hash			= md5($password);
		$result					= $this->Admin_Model->login($username, $password_hash);
		if($result == true) {
			$this->session->set_userdata(array(
				'admin'	=> $username
			));
			redirect('admin/');
		}
		else
		{
			$this->session->set_flashdata('failed', 'Username atau Password Salah');
			redirect('admin/login/');
		}
	}
	public function index() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['pesanan']		= $this->Admin_Model->pesanan();
		$data['pembayaran']		= $this->Admin_Model->pembayaran();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/index', $data);		
		$this->load->view('admin/footer');		
	}
	public function pembayaran($id_transaksi) {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['pesanan']		= $this->Admin_Model->pesanan();
		$data['pembayaran']		= $this->Admin_Model->pembayaran();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/pembayaran', $data);		
		$this->load->view('admin/footer');		
	}
	public function konfirmasipembayaran() {
		$id_transaksi = $this->input->post('id_transaksi');
		$konfirmasi = $this->Admin_Model->konfirmasipembayaran($id_transaksi);
		if($konfirmasi = true) {
			$this->session->set_flashdata('konfirmasi_success', "Pesanan Telah Dikonfirmasi");
			redirect('admin/index');
		}
		else {
			$this->session->set_flashdata('konfirmasi_failed', "Tidak dapat Meng-Konfirmasi Pesanan");
			redirect('admin/index');
		}
	}
	public function detailpesanan($id_transaksi) {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['detailpesanan']		= $this->Admin_Model->detailpesanan($id_transaksi);
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/detailpesanan', $data);		
		$this->load->view('admin/footer');		
	}
	public function terimapesanan() {
		$id_transaksi 	= $this->input->post('id_transaksi');
		$status			= "diterima";
		$sts_ambil		= "belumdiambil";
		$terimapesanan 	= $this->Admin_Model->terimapesanan($id_transaksi,$status,$sts_ambil);
		if($terimapesanan = true) {
			$this->session->set_flashdata('success', "Pesanan Telah Diterima");
			redirect('admin/index');
		}
		else {
			$this->session->set_flashdata('failed', "Tidak dapat Menerima Pesanan");
			redirect('admin/index');
		}
		
	}
	public function tolakpesanan() {
		$id_transaksi	= $this->input->post('id_transaksi');
		$kd_produk		= $this->input->post('kd_produk');
		$catatan		= $this->input->post('catatan');
		$jml_stok		= $this->input->post('jml_stok') + $this->input->post("jml_beli");
		$updatestok		= $this->Admin_Model->updatestok($kd_produk, $jml_stok);
		$tolakpesanan	= $this->Admin_Model->tolakpesanan($id_transaksi, $catatan);
		if($tolakpesanan = true) {
			$this->session->set_flashdata('tolaksuccess', "Pesanan Telah Ditolak");
			redirect('admin/index');
		}
		else {
			$this->session->set_flashdata('tolakfailed', "Tidak dapat Menolak Pesanan");
			redirect('admin/index');
		}
	}
	public function suplier() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['datasuplier']	= $this->Admin_Model->datasuplier();
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']	= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/suplier', $data);		
		$this->load->view('admin/footer');		
	}
	public function tambahsuplay() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['dataproduk']		= $this->Admin_Model->dataproduk();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/tambahsuplay', $data);		
		$this->load->view('admin/footer');		
	}
	public function simpansuplay() {
		$nm_suplier	= $this->input->post('nm_suplier');
		$kd_produk	= $this->input->post('kd_produk');
		$satuan		= $this->input->post('satuan');
		$harga		= $this->input->post('harga');
		$jml_beli	= $this->input->post('jml_beli');
		$tgl_beli	= $this->input->post('tgl_beli');
		$simpan		= $this->Admin_Model->simpansuplier($nm_suplier,$kd_produk,$satuan,$harga,$jml_beli,$tgl_beli);
		$update		= $this->Admin_Model->updatesuplay($kd_produk,$jml_beli);
		if($simpan = true) {
			$this->session->set_flashdata('simpan_success', 'Berhasil Menambahkan Data');
			redirect('admin/tambahsuplay/');
		}
		else{
			$this->session->set_flashdata('simpan_failed', 'Gagal Menambahkan Data');
			redirect('admin/tambahsuplay/');
		}
		
	}
	public function editsuplier($id_suplier) {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['datasuplier']	= $this->Admin_Model->dataspesificsuplier($id_suplier);
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/editsuplay', $data);		
		$this->load->view('admin/footer');		
	}
	public function updatesuplier() {
		$id_suplier = $this->input->post('id_suplier');
		$nm_suplier	= $this->input->post('nm_suplier');
		$satuan		= $this->input->post('satuan');
		$harga		= $this->input->post('harga');
		$tgl_beli	= $this->input->post('tgl_beli');
		$update 	= $this->Admin_Model->updatesuplier($id_suplier,$nm_suplier,$satuan,$harga,$tgl_beli);
		if($update == true) {
			$this->session->set_flashdata('update_success', 'Berhasil Memperbarui Data');
			redirect('admin/editsuplier/'.$id_suplier);
		}
		else{
			$this->session->set_flashdata('update_failed', 'Gagal Memperbarui Data');
			redirect('admin/editsuplier/'.$id_suplier);
		}
	}
	public function hapussuplier($id_suplier) {
		$hapus = $this->Admin_Model->hapussuplier($id_suplier);
		if($hapus == true) {
			$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');
			redirect("admin/suplier");
		}
		else {
			$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
			redirect("admin/suplier");
		}
	}
	public function produk() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['dataproduk']	= $this->Admin_Model->dataproduk();
		$data['username']	= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']	= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/produk', $data);		
		$this->load->view('admin/footer');		
	}
	public function tambahproduk() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']	= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']	= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/tambahproduk');		
		$this->load->view('admin/footer');	
	}
	public function editproduk($kd_produk) {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']	= $_SESSION['admin'];
		$data['produk']		= $this->Admin_Model->produk($kd_produk);
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']	= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/editproduk', $data);		
		$this->load->view('admin/footer');	
	}
	public function simpanproduk() {
		$kd_produk	= $this->input->post('kd_produk');
		$nm_produk	= $this->input->post('nm_produk');
		$harga		= $this->input->post('harga');
		$jenis		= $this->input->post('jenis');
		$config['upload_path']	= "./assets/img/product";
		$config['allowed_types']= "gif|jpg|jpeg|png";
		$config['max_size']		= '1024';
		$config['file_name']	= $kd_produk;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('gambar'))
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menambahkan Data');
			$data['upload_data']= $this->upload->data();
			$img 				= $_FILES['gambar']['name'];
			$img_ext			= pathinfo($img, PATHINFO_EXTENSION);
			$gambar				= $config['file_name'].".".$img_ext;
			$this->Admin_Model->simpanproduk($kd_produk, $nm_produk ,$harga, $jenis, $gambar);
			redirect('admin/tambahproduk');
		}
		else 
		{
			$this->session->set_flashdata('simpan_failed', $this->upload->display_errors());
			redirect('admin/tambahproduk');
		}
	}
	public function updateproduk() {
		$kd_produk	= $this->input->post('kd_produk');
		$nm_produk	= $this->input->post('nm_produk');
		$harga		= $this->input->post('harga');
		$jenis		= $this->input->post('jenis');
		$update	 	= $this->Admin_Model->updateproduk($kd_produk,$nm_produk,$harga,$jenis);
		if($update == true) {
			$this->session->set_flashdata('update_success', 'Berhasil Memperbarui Data');
			redirect('admin/editproduk/'.$kd_produk);
		}
		else{
			$this->session->set_flashdata('update_success', 'Gagal Memperbarui Data');
			redirect('admin/editproduk/'.$kd_produk);
		}
	} 
	public function hapusproduk($kd_produk) {
		$hapus = $this->Admin_Model->hapusproduk($kd_produk);
		if($hapus == true) {
			$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Data');
			redirect("admin/produk");
		}
		else {
			$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Data');
			redirect("admin/produk");
		}
	}
	public function pelanggan() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['member']			= $this->Admin_Model->member();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/pelanggan', $data);		
		$this->load->view('admin/footer');	
	}
	public function transaksi() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']	= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']	= $this->Admin_Model->hitungprofit();
		$data['transaksi']		= $this->Admin_Model->transaksi();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/transaksi', $data);		
		$this->load->view('admin/footer');
	}
	public function laporanlabarugi() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['dataproduk']	= $this->Admin_Model->dataproduk();
		$data['username']	= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']	= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/laporan', $data);		
		$this->load->view('admin/footer');		
	}
	public function biaya() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}

		$data['username']	= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['databiaya']		= $this->Admin_Model->databiaya();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/biaya', $data);		
		$this->load->view('admin/footer');		
	}
	public function tambahbiaya() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']	= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']	= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/tambahbiaya', $data);		
		$this->load->view('admin/footer');		
	}
	public function simpanbiaya() {
			$kode_rekening	= $this->input->post('kode_rekening');
			$tanggal		= $this->input->post('tanggal');
			$deskripsi		= $this->input->post('deskripsi');
			$jumlah			= $this->input->post('jumlah');
			$jns_biaya		= $this->input->post('jns_biaya');
		$simpan = $this->Admin_Model->simpanbiaya($kode_rekening,$tanggal,$deskripsi,$jumlah,$jns_biaya);
		if($simpan = true) {
			$this->session->set_flashdata('simpan_success', 'Berhasil Menambahkan Data');
			redirect("admin/tambahbiaya");
		}
		else {
			$this->session->set_flashdata('simpan_failed', 'Gagal Menambahkan Data');
			redirect("admin/tambahbiaya");
		}
		
	}
	public function editbiaya($kode_rekening) {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['databiaya']		= $this->Admin_Model->databiayaproduksi($kode_rekening);
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/editbiaya', $data);		
		$this->load->view('admin/footer');		
	}
	public function updatebiaya() {
		$kode_rekening	= $this->input->post('kode_rekening');
		$tanggal		= $this->input->post('tanggal');
		$deskripsi		= $this->input->post('deskripsi');
		$jumlah			= $this->input->post('jumlah');
		$jns_biaya		= $this->input->post('jns_biaya');
		$simpan = $this->Admin_Model->updatebiaya($kode_rekening,$tanggal,$deskripsi,$jumlah,$jns_biaya);
		if($simpan = true) {
			$this->session->set_flashdata('update_success', 'Berhasil Memperbarui Data');
			redirect("admin/editbiaya/".$kode_rekening);
		}
		else {
			$this->session->set_flashdata('update_failed', 'Gagal Memperbarui Data');
			redirect("admin/editbiaya/".$kode_rekening);
		}
		
	}
	public function profile() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['kontak']			= $this->Admin_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/profile', $data);		
		$this->load->view('admin/map', $data);		
		$this->load->view('admin/footer');
	}
	public function simpankontak() {
		$nm_kontak	= $this->input->post('nm_kontak');
		$kontak		= $this->input->post('kontak');
		$simpan		= $this->Admin_Model->simpankontak($nm_kontak, $kontak);
		if($simpan = true) {
			$this->session->set_flashdata('simpan_success', 'Berhasil Menambahkan Data');
			redirect("admin/profile");
		}
		else {
			$this->session->set_flashdata('simpan_failed', 'Gagal Menambahkan Data');
			redirect("admin/profile");
		}
	}
	public function updatekontak() {
		$id_kontak  = $this->input->post('id_kontak');
		$nm_kontak	= $this->input->post('nm_kontak');
		$kontak		= $this->input->post('kontak');
		$simpan		= $this->Admin_Model->updatekontak($id_kontak, $nm_kontak, $kontak);
		if($simpan = true) {
			$this->session->set_flashdata('update_success', 'Berhasil Memperbarui Data');
			redirect("admin/editkontak/".$id_kontak);
		}
		else {
			$this->session->set_flashdata('update_failed', 'Gagal Memperbarui Data');
			redirect("admin/editkontak/".$id_kontak);
		}
	}
	public function editkontak($id_kontak) {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['datakontak']			= $this->Admin_Model->datakontak($id_kontak);
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/editkontak', $data);			
		$this->load->view('admin/footer');
	}
	public function hapuskontak($id_kontak) {
		$hapus = $this->Admin_Model->hapuskontak($id_kontak);
		if($hapus = true) {
			$this->session->set_flashdata('hapuskontak_success', 'Berhasil Menghapus Kontak');
			redirect("admin/profile");
		}
		else {
			$this->session->set_flashdata('hapuskontak_failed', 'Gagal Menghapus Kontak');
			redirect("admin/profile");
		} 
	}
	public function simpandeskripsi() {
		$tentangkami = $this->input->post("tentangkami");
		$simpan		= $this->Admin_Model->simpandeskripsi($tentangkami);
		if($simpan = true) {
			$this->session->set_flashdata('t_success', 'Berhasil MemperbaruiData');
			redirect("admin/profile");
		}
		else {
			$this->session->set_flashdata('t_failed', 'Gagal Memperbarui Data');
			redirect("admin/profile");
		} 
	}
	public function simpankoordinat() {
		$latitude	= $this->input->post("latitude");
		$longitude	= $this->input->post("longitude");
		$simpan		= $this->Admin_Model->simpankoordinat($latitude, $longitude);
		if($simpan = true) {
			$this->session->set_flashdata('k_success', 'Berhasil Memperbarui Data');
			redirect("admin/profile");
		}
		else {
			$this->session->set_flashdata('k_failed', 'Gagal Memperbarui Data');
			redirect("admin/profile");
		}
		
	}
	public function banner() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['databanner']		= $this->Admin_Model->databanner();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/banner', $data);			
		$this->load->view('admin/footer');
	}
	public function tambahbanner() {
		$date	= date("dmY-his");
		$config['upload_path']	= "./assets/img/banner";
		$config['allowed_types']= "gif|jpg|jpeg|png";
		$config['max_size']		= '1024';
		$config['file_name']	= $date;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('banner'))
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menambahkan Banner');
			$data['upload_data']= $this->upload->data();
			$img 				= $_FILES['banner']['name'];
			$img_ext			= pathinfo($img, PATHINFO_EXTENSION);
			$banner				= $config['file_name'].".".$img_ext;
			$this->Admin_Model->simpanbanner($banner);
			redirect('admin/banner');
		}
		else 
		{
			$this->session->set_flashdata('simpan_failed', $this->upload->display_errors());
			redirect('admin/banner');
		}
	}
	public function hapusbanner($id_banner) {
		$hapus = $this->Admin_Model->hapusbanner($id_banner);
		if($hapus = true) {
			$this->session->set_flashdata('hapus_success', 'Berhasil Menghapus Banner');
			redirect('admin/banner');
		}
		else {
			$this->session->set_flashdata('hapus_failed', 'Gagal Menghapus Banner');
			redirect('admin/banner');
		}
	}
	public function gantipassword() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/gantipassword', $data);			
		$this->load->view('admin/footer');
	}
	public function simpanpassword() {
		$passwordlama			= $this->input->post("passwordlama");
		$passwordlama_hash		= md5($passwordlama);
		$passwordbaru			= $this->input->post("passwordbaru");
		$passwordbaru_hash		= md5($passwordbaru);
		$konfirmasipasswordbaru	= $this->input->post("konfirmasipasswordbaru");
		$validpassword			= $this->Admin_Model->validpassword($passwordlama_hash);
		if($validpassword == true) {
			if($passwordbaru = $konfirmasipasswordbaru) {
				$simpan 		= $this->Admin_Model->updatepassword($passwordbaru_hash);
				if($simpan = true) {
					$this->session->set_flashdata('resetpassword_berhasil', 'Berhasil Me-Reset Password');
					redirect('admin/gantipassword');
				}
				else{
					$this->session->set_flashdata('resetpassword_gagal', 'Tidak Dapat Me-Reset Password');
					redirect('admin/gantipassword');
				}
			}
			else {
				$this->session->set_flashdata('reset_gagal', 'Konfirmasi Password Salah');
				redirect('admin/gantipassword');
			}
		}
		else {
			$this->session->set_flashdata('password_invalid', 'Password Lama Salah');
			redirect('admin/gantipassword');
		}
	}
	public function tambahvideo() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/tambahvideo', $data);			
		$this->load->view('admin/footer');
	}
	public function editvideo($id_video) {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['videos']			= $this->Admin_Model->videos($id_video);
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/editvideo', $data);			
		$this->load->view('admin/footer');
	}
	public function simpanvideo() {
		$judul		= $this->input->post('judul');
		$video		= $this->input->post('video');
		$deskripsi	= $this->input->post('materi');
		$publish		= $this->Admin_Model->simpanvideo($judul,$video,$deskripsi);
		if($publish = true) {
			$this->session->set_flashdata('publish_berhasil', 'Berhasil Menambahkan Video');
			redirect('admin/tambahvideo');
		}
		else {
			$this->session->set_flashdata('publish_gagal', 'Tidak Dapat Menambahkan Video');
			redirect('admin/tambahvideo');
			
		}
		
	}
	public function updatevideo() {
		$id_video		= $this->input->post('id_video');
		$judul		= $this->input->post('judul');
		$video		= $this->input->post('video');
		$deskripsi	= $this->input->post('materi');
		$update		= $this->Admin_Model->updatevideo($id_video,$judul,$video,$deskripsi);
		if($publish = true) {
			$this->session->set_flashdata('update_berhasil', 'Berhasil Memperbarui Video');
			redirect('admin/editvideo/'.$id_video);
		}
		else {
			$this->session->set_flashdata('update_gagal', 'Tidak Dapat Memperbarui Video');
			redirect('admin/editvideo/'.$id_video);
			
		}
		
	}
	public function materi() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['datamateri']			= $this->Admin_Model->datamateri();
		$data['materivideo']			= $this->Admin_Model->materivideo();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/materi', $data);			
		$this->load->view('admin/footer');
	}
	public function publishmateri() {
		$jdl_materi	= $this->input->post("jdl_materi");
		$materi		= $this->input->post("materi");
		$publish 	= $this->Admin_Model->publishmateri($jdl_materi, $materi);
		if($publish = true) {
			$this->session->set_flashdata('publish_berhasil', 'Berhasil Mempublikasikan Materi');
			redirect('admin/materi');
		}
		else {
			$this->session->set_flashdata('publish_gagal', 'Tidak Dapat Mempublikasikan Materi');
			redirect('admin/materi');
			
		}
	}
	public function editmateri($id_materi) {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$data['datamateri']			= $this->Admin_Model->dataspesificmateri($id_materi);
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/editmateri', $data);			
		$this->load->view('admin/footer');
	}
	public function updatemateri() {
		$id_materi	= $this->input->post('id_materi');
		$jdl_materi	= $this->input->post('jdl_materi');
		$materi	= $this->input->post('materi');
		$update = $this->Admin_Model->updatemateri($id_materi, $jdl_materi,$materi);
		if($udpate = true) {
			$this->session->set_flashdata('update_berhasil', 'Berhasil Memperbarui Data');
			redirect('admin/editmateri/'.$id_materi);
		}
		else {
			$this->session->set_flashdata('udpate_gagal', 'Gagal Memperbarui Data');
			redirect('admin/editmateri/'.$id_materi);
		}
	}
	public function hapusmateri($id_materi) {
		$delete = $this->Admin_Model->hapusmateri($id_materi);
		if($delete = true) {
			$this->session->set_flashdata('delete_berhasil', 'Berhasil Menghapus Data');
			redirect('admin/materi/');
		}
		else {
			$this->session->set_flashdata('delete_gagal', 'Tidak Dapat Menghapus Data');
			redirect('admin/materi');
		}
	}
	public function hapusvideo($id_video) {
		$delete = $this->Admin_Model->hapusvideo($id_video);
		if($delete = true) {
			$this->session->set_flashdata('deletevideo_berhasil', 'Berhasil Menghapus Video');
			redirect('admin/materi/');
		}
		else {
			$this->session->set_flashdata('deletevideo_gagal', 'Tidak Dapat Menghapus Video');
			redirect('admin/materi/');
		}
	}
	public function lahan() {
		if(! $this->session->userdata('admin')) {
			redirect('admin/login');
		}
		$data['username']		= $_SESSION['admin'];
		$data['jmlpelanggan']	= $this->Admin_Model->hitungpelanggan();
		$data['jmltransaksi']	= $this->Admin_Model->hitungtransaksi();
		$data['jmlprofit']		= $this->Admin_Model->hitungprofit();
		$this->load->view('admin/head');
		$this->load->view('admin/header', $data);		
		$this->load->view('admin/lahan', $data);			
		$this->load->view('admin/footer');
	}
	public function simpanlahan() {
		$date		= date("dmyhis");
		$keuntungan	= $this->input->post("keuntungan");
		$kerugian	= $this->input->post("kerugian");
		$keterangan	= $this->input->post("keterangan");
		$config['upload_path']	= "./assets/img/lahan";
		$config['allowed_types']= "gif|jpg|jpeg|png";
		$config['max_size']		= '1024';
		$config['file_name']	= $date;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('lahan'))
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Menambahkan Data');
			$data['upload_data']= $this->upload->data();
			$img 				= $_FILES['lahan']['name'];
			$img_ext			= pathinfo($img, PATHINFO_EXTENSION);
			$lahan				= $config['file_name'].".".$img_ext;
			$this->Admin_Model->simpanlahan($keuntungan, $kerugian, $keterangan ,$lahan);
			redirect('admin/lahan');
		}
		else 
		{
			$this->session->set_flashdata('simpan_failed', $this->upload->display_errors());
			redirect('admin/lahan');
		}
	}
	public function hapusbiaya($kode_rekening) {
		$delete = $this->Admin_Model->hapusbiaya($kode_rekening);
		if($delete = true) {
			$this->session->set_flashdata('delete_success', 'Berhasil Menghapus Data');
			redirect('admin/biaya');
		}
		else {
			$this->session->set_flashdata('delete_failed', 'Gagal Menghapus Data');
			redirect('admin/biaya');
		}
	}
	public function report() {
		$from 				= $this->input->get('from');
		$to					= $this->input->get('to');
		$data['from']		= $from;
		$data['to']			= $to;
		$data['reportpenjualan']	= $this->Admin_Model->reportpenjualan($from,$to) ;
		$data['reportbiaya']		= $this->Admin_Model->reportbiaya($from,$to) ;
		$data['reportsumbiaya']		= $this->Admin_Model->reportsumbiaya($from,$to) ;
		$data['reportpembelian']	= $this->Admin_Model->reportpembelian($from,$to);
		$this->load->view('admin/head');
		$this->load->view('admin/printreport', $data);
	}
}
?>