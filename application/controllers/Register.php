<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

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

	public function new_profile_and_login()
	{

		 $next = $this->Profile_model->get_next_id();
		 $profile_id = $next->AUTO_INCREMENT;

		 $config['upload_path']          = './uploads/';
         $config['allowed_types']        = 'gif|jpg|png';
         $config['max_size']             = 100;
         $config['max_width']            = 1024;
         $config['max_height']           = 768;
         $config['file_name']			 = 'profile_' + $profile_id;

         $this->load->library('upload', $config);

		$this->form_validation->set_rules('name','Nama','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('alamat','Alamat','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('no_telp','No Telpon','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
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
			$this->load->view('Register/Profile_form');
		}
		else if(!$this->upload->do_upload('userfile')){
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('Register/Profile_form', $error);
		}
		else
		{
			//ambil id increment untuk profil baru
			$next = $this->Profile_model->get_next_id();

			$dataprofile = array(
				'profile_nama' => $this->input->post('name'),
				'profile_alamat' => $this->input->post('alamat'),
				'profile_jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'profile_no_telp' => $this->input->post('no_telp'),
				'profile_email' => $this->input->post('email'),
				'profile_picture' => $this->upload->data('file_name'),
			);
			$this->Profile_model->insert($dataprofile);


			$datalogin = array(
				'username' => $this->input->post('username'),
				'password' => $this->input->post('password'),
				'login_profile_id' => $profile_id
			);
			$this->Login_model->insert($datalogin);

			$this->load->view('Register/success');
		}
	}

	public function checkid($username)
	{
		$username = $this->input->post('username');
		$ketersediaan = $this->Login_model->checkid($username);
		echo json_encode($ketersediaan);
	}

	public function daftar()
	{
		$this->load->view('Register/register_new');
	}

	public function masuk()
	{
		$this->load->view('Register/login_new');
	}
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */