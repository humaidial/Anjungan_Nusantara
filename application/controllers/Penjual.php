<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Do your magic here
		$this->load->model('Login_model');
		$this->load->model('Profile_model');
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

	public function form_usaha_baru($value='')
	{
		$this->load->view('penjual/buat_baru');

	}

	public function notif_about_akun()
	{
		$notifakun = $this->Login_model->get_data_belum_verifikasi();
		$notiflainnya = 0;
		return(array($notifakun, $notiflainnya));
	}

}

/* End of file Penjual.php */
/* Location: ./application/controllers/Penjual.php */