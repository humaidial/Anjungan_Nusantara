<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');	
	}

	public function index()
	{
		$this->load->view('Login/Login_form');
	}

	

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */