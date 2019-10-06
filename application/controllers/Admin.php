<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
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
			// 'username'= $session_data'username',
			// 'level'= $session_data'level',
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/dashboard',
			'footer' => 'admin/footer',

		];
		$this->load->view('admin/template',$data);
	}

	public function akun($tipe_user)
	{
		$data = [
			// 'username'= $session_data'username',
			// 'level'= $session_data'level',
			'sidebar' => 'admin/sidebar',
			'content' => 'admin/akun',
			'footer' => 'admin/footer',

		];
		$this->load->view('admin/template',$data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */