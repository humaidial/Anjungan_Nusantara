<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Profile_model');
		$this->load->model('Usaha_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
			$usahaId =$session_data['profile_id'];

			// if($this->cek_usaha($usahaId) == "Belum Ada"){
			// 	$this->buat_usaha_baru();
			// }
			// else{
			// 	$this->index();
			// }

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
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/dashboard',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function buat_usaha_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar_baru',
			'content' => 'penjual/dashboard_baru',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function form_usaha_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/buat_baru',
			'footer' => 'penjual/footer',
		];
		$this->load->view('penjual/template',$data);
	}

	public function buat_produk_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar_produk_baru',
			'content' => 'penjual/dashboard_produk_baru',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function form_produk_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/buat_produk_baru',
			'footer' => 'penjual/footer',
		];
		$this->load->view('penjual/template',$data);
	}


	public function notif_about_akun()
	{
		$notifakun = $this->Login_model->get_data_belum_verifikasi();
		$notiflainnya = 0;
		return(array($notifakun, $notiflainnya));
	}

	public function cek_usaha($id)
	{
		if($this->Usaha_model->cek_usaha($id)){
			return "Belum Ada";
		}
		else{
			return "Sudah Ada";
		}
	}

	public 	function tes()
	{
		$this->load->view('penjual/dashboard');
	}

}

/* End of file Penjual.php */
/* Location: ./application/controllers/Penjual.php */