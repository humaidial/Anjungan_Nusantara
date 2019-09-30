<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berandauser extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
		$this->load->model('Login_model');
	}

	public function berhasildaftar()
	{
		$this->load->view('home/daftarberhasil');
	}

	public function homepage()
	{
		$this->load->view('home/homepage');
	}

}
