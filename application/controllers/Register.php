<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public $nama;
	public $alamat;
	public $jenis_kelamin;
	public $no_telp;
	public $email;

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Profile_model');
		$this->load->model('Login_model');	
	}

	public function index()
	{
		$this->load->view('Register/Profile_form');
	}

	public function new_profile()
	{
		$this->form_validation->set_rules('name','Nama','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('alamat','Alamat','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('no_telp','No Telpon','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
		
		if($this->form_validation->run() == False)
		{
			$this->load->view('Register/Profile_form');
		}
		else
		{
			$nama = $this->input->post('name');
			$alamat = $this->input->post('alamat');
			$jenis_kelamin = $this->input->post('jenis_kelamin');
			$no_telp = $this->input->post('no_telp');
			$email = $this->input->post('email');
			// var_dump($nama,$alamat, $jenis_kelamin, $no_telp, $email);
			$this->load->view('Register/Login_form');
		}
	}

	public function new_login()
	{
		$this->form_validation->set_rules(
	        'username', 'Username','required|min_length[8]',
	        array(
	                'required'      => '%s tidak boleh kosong.',
	                'min_length'     => '%s minimal 8 karakter.'
	        )
		);
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',array('required' => '%s tidak boleh kosong.',  'min_length'     => '%s minimal 8 karakter.'));
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'matches[password]', array(
                'matches'     => 'Harus sama dengan password.'
        ));


		if($this->form_validation->run() == False)
		{
			$this->load->view('Register/Login_form');
		}
		else
		{
			$next = $this->Profile_model->get_next_id();

			$data = array(
				'profile_nama' => $nama,
				'profile_alamat' => $alamat,
				'profile_jenis_kelamin' => $jenis_kelamin,
				'profile_no_telp' => $no_telp,
				'profile_email' => $email
			);
			$this->Profile_model->insert($data);

			$data = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'login_profile_id' => $next->AUTO_INCREMENT
			);
			$this->Login_model->insert($data);
		}
	}

	public function tes()
	{
		$data = $this->Profile_model->get_next_id();
		// $text = $data->AUTO_INCREMENT;
		// var_dump($text);
		var_dump($data->AUTO_INCREMENT);
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */