<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public $nama;
	public $alamat;
	public $jenis_kelamin;
	public $no_telp;
	public $email;

	public function index()
	{
		$this->load->view('Register/Profile_form');
	}

	public function new_profile()
	{
		$this->form_validation->set_rules('name','Nama','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('alamat','Alamat','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('no_telp','No Telpon','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
		
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
        'username', 'Username','required|min_length[5]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        )
);
		$this->form_validation->set_rules('password', 'Password', 'required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]');


		if($this->form_validation->run() == False)
		{
			$this->load->view('Register/Login_form');
		}
		else
		{
			var_dump("Hello");
		}
	}

}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */