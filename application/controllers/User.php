<?php 
Class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->helper(array('form','url'));
		$this->load->model(array('User_Model', 'Admin_Model'));
		$this->load->library(array('session', 'pdflibrary'));
	}
	
	//HALAMAN SEBELUM LOGIN
	// **
	public function index() {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kategori']	= $this->User_Model->kategori();
		$data['product']	= $this->User_Model->product();
		$data['kontak']		= $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$data['databanner']	= $this->Admin_Model->databanner();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/header', $data);
		$this->load->view('main/index', $data);	
		$this->load->view('main/footer', $data);	
	}
	public function materi() {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kategori']	= $this->User_Model->kategori();
		$data['product']	= $this->User_Model->product();
		$data['kontak']		= $this->User_Model->kontak();
		$data['dataprofile']= $this->Admin_Model->dataprofile();
		$data['databanner']	= $this->Admin_Model->databanner();
		$data['materi']		= $this->User_Model->materi();
		$data['materivideo']		= $this->User_Model->video();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/header', $data);
		$this->load->view('main/materi', $data);	
		$this->load->view('main/footer', $data);
	}
	public function video() {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kategori']	= $this->User_Model->kategori();
		$data['product']	= $this->User_Model->product();
		$data['kontak']		= $this->User_Model->kontak();
		$data['dataprofile']= $this->Admin_Model->dataprofile();
		$data['databanner']	= $this->Admin_Model->databanner();
		$data['materivideo']		= $this->User_Model->video();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/header', $data);
		$this->load->view('main/video', $data);	
		$this->load->view('main/footer', $data);
	}
	public function info() {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kategori']	= $this->User_Model->kategori();
		$data['product']	= $this->User_Model->product();
		$data['kontak']		= $this->User_Model->kontak();
		$data['dataprofile']= $this->Admin_Model->dataprofile();
		$data['databanner']	= $this->Admin_Model->databanner();
		$data['info']		= $this->User_Model->infolahan();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/header', $data);
		$this->load->view('main/info', $data);	
		$this->load->view('main/footer', $data);
	}
	public function kategori($jenis) {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kategori']	= $this->User_Model->kategori();
		$data['kategoriproduct']	= $this->User_Model->kategoriproduct($jenis);
		$data['kontak']		= $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$data['databanner']	= $this->Admin_Model->databanner();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/header', $data);
		$this->load->view('main/kategoriproduk', $data);	
		$this->load->view('main/footer', $data);	
	}
	public function detailproduct($kd_produk) {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kategori']	= $this->User_Model->kategori();
		$data['detailproduct'] = $this->User_Model->detailproduct($kd_produk);
		$data['kontak']		= $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$data['databanner']	= $this->Admin_Model->databanner();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/header', $data);
		$this->load->view('main/detailproduk', $data);	
		$this->load->view('main/footer', $data);		
	}
	public function pilihusername() {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kategori']	    = $this->User_Model->kategori();
		$data['kontak']		    = $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/pilihusername', $data);	
		$this->load->view('main/footer', $data);		
	}
	public function login() {
		$this->load->view('main/head');
		$this->load->view('main/login');	
	}
	public function loginvalidation() {
		$username				= $this->input->post('username', TRUE);
		$password				= $this->input->post('password', TRUE);
		$password_hash			= md5($password);
		$result					= $this->User_Model->login($username, $password_hash);
		if($result == true) {
			$this->session->set_userdata(array(
				'user'	=> $username
			));
			redirect('user/index');
		}
		else
		{
			$this->session->set_flashdata('failed', 'Username atau Password Salah');
			redirect('user/login/');
		}
	}
	public function logout() {
		$this->session->unset_userdata("user");
		redirect('user/index');
	}
	public function register() {
		$this->load->view('main/head');
		$this->load->view('main/register');
	}
	public function simpanuser() {
		$nik			= $this->input->post('nik');
		$nama			= $this->input->post('nama');
		$username		= $this->input->post('username');
		$password		= $this->input->post('password');
		$password_hash	= md5($password);
		$pekerjaan		= $this->input->post('pekerjaan');
		$register		= $this->User_Model->register($nik, $nama, $username, $password_hash, $pekerjaan);
		if($register = true) {
			$this->session->set_flashdata('success', 'Registrasi Akun Berhasil');
			redirect("user/register");
		}
		else
		{
			$this->session->set_flashdata('failed', 'Username atau Password Salah');
			redirect("user/register");
		}
	}
	public function updateuser() {
		$nik		= $this->input->post('nik');
		$nama		= $this->input->post('nama');
		$pekerjaan	= $this->input->post('pekerjaan');
		$hp			= $this->input->post('hp');
		$alamat		= $this->input->post('alamat');
		$desa		= $this->input->post('desa');
		$kecamatan	= $this->input->post('kecamatan');
		$kabupaten	= $this->input->post('kabupaten');
		$s_question	= $this->input->post('s_question');
		$s_answer	= $this->input->post('s_answer');
		$latitude	= $this->input->post('latitude');
		$longitude	= $this->input->post('longitude');
		$update		= $this->User_Model->updateuser($nik,$nama,$pekerjaan,$hp,$alamat,$desa,$kecamatan,$kabupaten,$s_question,$s_answer,$latitude,$longitude);
		if($update = true) {
			$this->session->set_flashdata('success', 'Profile Anda Berhasil Diperbarui');
			redirect("user/profile");
		}
		else {
			$this->session->set_flashdata('failed', 'Tidak Dapat Memberparui Profile Anda');
			redirect("user/profile");
		}
	}
	public function beliproduk() {
		$date			= date("Y-m-d");
		$datetime		= date("dmYhis");
		$tgl_transaksi	= $date;
		$id_transaksi	= $datetime;
		$nik			= $this->input->post("nik");
		$kd_produk		= $this->input->post("kd_produk");
		$jml_beli		= $this->input->post("jml_beli");
		$sts_delivery	= $this->input->post('sts_delivery');
		$jml_stok		= $this->input->post("jml_stok") - $this->input->post("jml_beli");
		$updatestok		= $this->User_Model->updatestok($kd_produk, $jml_stok);
		$beli			= $this->User_Model->beliproduk($id_transaksi, $nik, $kd_produk, $tgl_transaksi, $jml_beli, $sts_delivery);
		$pembayaran		= $this->User_Model->pembayaran($id_transaksi);
		if($beli = true) {
			$this->session->set_flashdata('success', 'Pesanan anda Telah di Proses');
			redirect("user/billing");
		}
		else {
			$this->session->set_flashdata('failed', 'Pesanan anda Tidak Dapat di Proses');
			redirect("user/detailproduct/".$kd_produk);
		}
	}
	public function daftartransaksi() {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
			$data['transaksipending'] = $this->User_Model->transaksipending($username);
			$data['transaksiditerima'] = $this->User_Model->transaksiditerima($username);
			$data['transaksiditolak'] = $this->User_Model->transaksiditolak($username);
		}
		$data['kategori']		= $this->User_Model->kategori();
		$data['kontak']			= $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/daftartransaksi', $data);	
		$this->load->view('main/footer', $data);	
	}
	public function profile() {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kontak']			= $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/profile', $data);	
		$this->load->view('main/footer', $data);
	}
	public function validusername() {
		$username = $this->input->post("username");
		$valid	  = $this->User_Model->validusername($username);
		if($valid == true) {
			redirect("user/security/".$username);
		}
		else {
			$this->session->set_flashdata('failed', 'Username Tidak Terdaftar');
			redirect("user/pilihusername/");
		}
	}
	public function security($username) {
		$data['kategori']	    = $this->User_Model->kategori();
		$data['kontak']		    = $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$data['datasecurity']	= $this->User_Model->datasecurity($username);
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/security', $data);	
		$this->load->view('main/footer', $data);		
	}
	public function validanswer() {
		$s_question = $this->input->post("s_question");
		$s_answer	= $this->input->post("s_answer");
		$username	= $this->input->post("username");
		$valid 		= $this->User_Model->validanswer($username, $s_question, $s_answer);
		if($valid == true) {
			redirect("user/resetpassword/".$username);
		}
		else {
			$this->session->set_flashdata('failed', 'Jawaban anda Salah');
			redirect("user/security/".$username);
		}
	}
	public function resetpassword($username) {
		$data['kategori']	    = $this->User_Model->kategori();
		$data['kontak']		    = $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$data['datasecurity']	= $this->User_Model->datasecurity($username);
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/resetpassword', $data);	
		$this->load->view('main/footer', $data);	
	}
	public function gantipassword() {
		$username	= $this->input->post("username");
		$password	= $this->input->post("password");
		$repassword	= $this->input->post("repassword");
		$password_hash = md5($password);
		if($password == $repassword) {
			$ganti = $this->User_Model->gantipassword($username, $password_hash);
			if($ganti = true) {
				$this->session->set_flashdata('gantisuccess', 'Reset Password Berhasil');
				redirect("user/resetpassword/".$username);
			}
			else {
				$this->session->set_flashdata('gantifailed', 'Tidak dapat Me-Reset Password');
				redirect("user/resetpassword/".$username);
			}
		}
		else {
			$this->session->set_flashdata('refailed', 'Konfirmasi Password tidak sesuai');
			redirect("user/resetpassword/".$username);
		}
		
	}
	public function billing() {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kontak']			= $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$data['belumlunas']		= $this->User_Model->belumlunas($username);
		$data['pembayaranpending']		= $this->User_Model->pembayaranpending($username);
		$data['riwayatpembayaran']		= $this->User_Model->riwayatpembayaran($username);
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/billing', $data);	
		$this->load->view('main/footer', $data);
	}
	public function cetakpembayaran($id_transaksi) {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['cetakpembayaran'] = $this->User_Model->cetakpembayaran($id_transaksi);
		$this->load->view('main/head');
		$this->load->view('main/cetakpembayaran', $data);	
		
	}
	
	public function konfirmasipembayaran($id_transaksi) {
		if($this->session->userdata('user')) {
			$data['username']	= $_SESSION['user'];
			$username			= $_SESSION['user'];
			$data['akun']		= $this->User_Model->profile($username);
		}
		$data['kontak']			= $this->User_Model->kontak();
		$data['dataprofile']	= $this->Admin_Model->dataprofile();
		$data['id_transaksi']	= $id_transaksi;
		$data['transaksi']		= $this->User_Model->konfirmasitransaksi($id_transaksi);
		$this->load->view('main/head');
		$this->load->view('main/navbar', $data);
		$this->load->view('main/konfirmasipembayaran', $data);	
		$this->load->view('main/footer', $data);	
	}
	public function simpanpembayaran() {
		$date				= date("dmy_his");
		$id_transaksi		= $this->input->post('id_transaksi');
		$nmr_rekening		= $this->input->post('nmr_rekening');
		$nm_bank			= $this->input->post('nm_bank');
		$nm_pemilik			= $this->input->post('nm_pemilik');
		$jml_transfer		= $this->input->post('jml_transfer');
		$tgl_transfer		= $this->input->post('tgl_transfer');
		$config['upload_path']	= "./assets/img/pembayaran";
		$config['allowed_types']= "gif|jpg|jpeg|png";
		$config['max_size']		= '1024';
		$config['file_name']	= $date."_".$id_transaksi;
		$this->load->library('upload', $config);
		if($this->upload->do_upload('bukti'))
		{
			$this->session->set_flashdata('simpan_success', 'Berhasil Mengirim Konfirmasi Pembayaran');
			$data['upload_data']= $this->upload->data();
			$img 				= $_FILES['bukti']['name'];
			$img_ext			= pathinfo($img, PATHINFO_EXTENSION);
			$gambar				= $config['file_name'].".".$img_ext;
			$this->User_Model->simpanpembayaran($id_transaksi,$nmr_rekening,$nm_bank,$nm_pemilik, $jml_transfer,$tgl_transfer,$gambar);
			redirect('user/konfirmasipembayaran/'.$id_transaksi);
		}
		else 
		{
			$this->session->set_flashdata('simpan_failed', $this->upload->display_errors());
			redirect('user/konfirmasipembayaran/'.$id_transaksi);
		}
	}
	public function struk($id_transaksi) {
		$transaksi	= $this->User_Model->transaksi($id_transaksi);
		foreach($transaksi as $data) {}
		ob_start();
		$pdf = new FPDF('p', 'mm', 'A5');
		$pdf->AddPage();
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(130,10, "ANUGRAF PS", 0,1, "L");
		$pdf->SetFont('Arial','',13);
		$pdf->Cell(130,10, $data['tgl_transaksi'], 0,1, "L");
		$pdf->Cell(130,10, "", 0,1, "L");
		$pdf->Cell(130,5, "=======================================================", 0,1, "C");
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(30,5, "ID TRANSAKSI", 0,0, "L");
		$pdf->Cell(10,5, " : ", 0,0, "C");
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(90,5, $data['id_transaksi'], 0,1, "L");
		$pdf->Cell(130,5, "=======================================================", 0,1, "C");
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(30,5, "NAMA BARANG", 0,0, "L");
		$pdf->Cell(10,5, " : ", 0,0, "C");
		$pdf->SetFont('Arial','',13);
		$pdf->Cell(90,5, $data['nm_produk'], 0,1, "L");
		$pdf->Cell(130,5, "=======================================================", 0,1, "C");
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(30,5, "HARGA", 0,0, "L");
		$pdf->Cell(10,5, " : ", 0,0, "C");
		$pdf->SetFont('Arial','',13);
		$pdf->Cell(90,5, "Rp.".number_format($data['harga'],0,'','.'), 0,1, "L");
		$pdf->Cell(130,5, "=======================================================", 0,1, "C");
		$pdf->SetFont('Arial','B',13);
		$pdf->Cell(30,5, "JUMLAH BELI", 0,0, "L");
		$pdf->Cell(10,5, " : ", 0,0, "C");
		$pdf->SetFont('Arial','',13);
		$pdf->Cell(90,5, $data['jml_beli'], 0,1, "L");
		$pdf->Cell(130,5, "=======================================================", 0,1, "C");
		$pdf->Cell(130,20, "", 0,1, "L");
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(30,5, "TOTAL", 0,0, "L");
		$pdf->Cell(10,5, " : ", 0,0, "C");
		$pdf->SetFont('Arial','B',16);
		$pdf->Cell(90,5, "Rp.".number_format($data['harga'] * $data['jml_beli'],0,'','.'), 0,1, "L");
		$pdf->Output();
		ob_end_flush(); 
	}
	// END **
	
}
?>