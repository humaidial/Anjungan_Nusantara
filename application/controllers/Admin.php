<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Profile_model');

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
		$data_akun = $this->Profile_model->profile_and_login($tipe_user);
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

	public function notif_about_akun()
	{
		$notifakun = $this->Login_model->get_data_belum_verifikasi();
		$notiflainnya = 0;
		return(array($notifakun, $notiflainnya));
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */