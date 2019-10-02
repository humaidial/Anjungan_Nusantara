<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Halamanadmin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
		$this->load->model('Login_model');
	}

	public function berandaadmin()
	{
		$this->load->view('admin/beranda');
	}

	

}
