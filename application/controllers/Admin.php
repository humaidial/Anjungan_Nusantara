<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Profile_model');
		$this->load->model('Kategori_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
		}
		else{
			echo '<script>alert("Anda Belum Login")</script>';
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/dashboard',
			'footer' => 'admin/footer',

		];
		$this->load->view('admin/template',$data);
	}


	public function akun($tipe_user)
	{
		if($tipe_user == "Penjual"){
			$data_akun = $this->Profile_model->profile_and_login_belum_verifikasi_dahulu();
		}
		else{
			$data_akun = $this->Profile_model->profile_and_login($tipe_user);
		}
		
		$data = [
			'notif' => $this->notif_about_akun(),
			'data_akun' => $data_akun,
			'judul' => $tipe_user,
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/akun',
			'footer' => 'admin/footer',

		];
		$this->load->view('admin/template',$data);
		// var_dump($data);
	}

	public function kategori()
	{
		$kategori = $this->Kategori_model->get_all();
		$data = [
			'kategori' => $kategori,
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/kategori',
			'footer' => 'admin/footer',

		];
		$this->load->view('admin/template',$data);
	}

	public function get_info()
	{
		 $id = $this->input->post('id');
		 $data = $this->Profile_model->profile_and_login(null,$id);
		 echo json_encode($data);
	}

	public function ganti_status()
	{
		 $id = $this->input->post('id');
		 $data = $this->Profile_model->verifikasi($id);
		 echo json_encode("Verifikasi berhasil dilakukan.");
	}

	public function checkemail()
	{
		$email = $this->input->post('email');
		$ketersediaan = $this->Login_model->checkemail($email );
		if($ketersediaan == true){
			echo json_encode($status = 'E-mail belum dipakai.');
		}
		else{
			echo json_encode($status = 'E-mail sudah dipakai.');
		}
		// echo "<pre>";
		// echo var_dump($ketersediaan);
		// echo "</pre>";
	}

	public function buat_akun()
	{
		 $next = $this->Profile_model->get_next_id();
		 $id = $next->AUTO_INCREMENT;
		 $nama = $this->input->post('nama');
		 $hape = $this->input->post('hape');
		 $alamat = $this->input->post('alamat');
		 $email = $this->input->post('email');
		 $password = $this->input->post('password');
		 $status = $this->input->post('status');
		 $level = $this->input->post('level');
		 $this->Profile_model->buat_profile($id, $nama, $hape, $alamat, $email, $password, $status, $level);
		 echo json_encode('Data berhasil ditambahkan.');
	}

	public function update_akun()
	{
		 $id = $this->input->post('id');
		 $nama = $this->input->post('nama');
		 $hape = $this->input->post('hape');
		 $alamat = $this->input->post('alamat');
		 $email = $this->input->post('email');
		 $password = $this->input->post('password');
		 $this->Profile_model->update_profile($id, $nama, $hape, $alamat, $email, $password);
		 echo json_encode('Data berhasil diupdate.');
	}

	public function hapus_akun()
	{
		 $id = $this->input->post('id');
		 $this->Profile_model->hapus_profile($id);
		 echo json_encode('Data berhasil dihapus.');
	}

	public function notif_about_akun()
	{
		$notifakun = $this->Login_model->get_data_belum_verifikasi();
		$notiflainnya = 0;
		return(array($notifakun, $notiflainnya));
	}

	public function proses_kategori()
	{
		 $id = $this->input->post('id');
		 $nama = $this->input->post('nama');
		 $tipe = $this->input->post('tipe');

		 if($tipe == "baru"){
		 	$data = array(
		 		'kategori_nama' => $nama
		 	);
		 	if($this->Kategori_model->insert($data)){
		 		$hasil = "Tambah Berhasil";
		 	}
		 	else{
		 		$hasil = "Tambah Gagal";
		 	}
		 }

		 echo json_encode($hasil);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */