<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tes extends CI_Controller {

	var $user;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Profile_model');
		$this->load->model('Usaha_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$this->user = $session_data['username'];
			$data['level']=$session_data['level'];
			$this->usahaId =$session_data['profile_id'];
		}
		else{
			echo '<script>alert("Anda Belum Login")</script>';
			redirect('Login','refresh');
		}
	}

	public function index()
	{
		if($this->Usaha_model->cek_usaha($this->session->userdata('profile_id'))){
			// $this->buat_usaha_baru();
			echo "Belum Ada";
		}
		else{
			// $this->dashboard();
			echo "Sudah Ada";
		}
	}

}

/* End of file tes.php */
/* Location: ./application/controllers/tes.php */