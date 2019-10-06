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
		$this->load->view('Register/register_new',array('error' => ' '));
	}

	public function new_profile_and_login()
	{

		 $next = $this->Profile_model->get_next_id();
		 $profile_id = $next->AUTO_INCREMENT;

		 // $config['upload_path']          = './assets/foto/foto_user';
   //       $config['allowed_types']        = 'gif|jpg|png';
   //       $config['file_name']			 = 'profile_'.$profile_id ;

   //       $this->load->library('upload', $config);

		$this->form_validation->set_rules('name','Nama','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('alamat','Alamat','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('jenis_kelamin','Jenis Kelamin','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('no_telp','No Telpon','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('level','Tipe','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]',array('required' => '%s tidak boleh kosong.',  'min_length'     => '%s minimal 8 karakter.'));
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'required|matches[password]', array(
				'required' => 'Silahkan ulangi password anda.',
                'matches'     => 'Harus sama dengan password.'
        ));
		
		if($this->form_validation->run() == False)
		{
			$this->load->view('Register/register_new',array('error' => ' '));
		}
		// else if(!$this->upload->do_upload('user_file')){
		// 	$error = array('error' => $this->upload->display_errors());

		// 	$this->load->view('Register/register_new', $error);
		// }
		else
		{
			//ambil id increment untuk profil baru
			$next = $this->Profile_model->get_next_id();

			$dataprofile = array(
				'profile_nama' => $this->input->post('name'),
				// 'profile_alamat' => $this->input->post('alamat'),
				// 'profile_jenis_kelamin' => $this->input->post('jenis_kelamin'),
				'profile_no_hp' => $this->input->post('no_telp'),
				// 'profile_picture' => $this->upload->data('file_name'),
			);
			$this->Profile_model->insert($dataprofile);

			$level = $this->input->post('level');
			if($level == "Pembeli"){
				$status = "Terverifikasi";
				$succes_page = "Register/sudah_verifikasi";
			}
			else{
				$status = "Belum Terverifikasi";
				$succes_page = "Register/belum_verifikasi";
			}

			$datalogin = array(
				// 'username' => $this->input->post('username'),
				'e_mail' => $this->input->post('email'),
				'password' => $this->input->post('password'),
				'login_level' => $level,
				'login_status' => $status,
				'login_profile_id' => $profile_id
			);
			$this->Login_model->insert($datalogin);

			$this->load->view($succes_page);
		}
	}

	public function checkemail()
	{
		$email = $this->input->post('email');
		$ketersediaan = $this->Login_model->checkemail($email );
		if($ketersediaan == true){
			echo json_encode($status = 'E-mail belum dipakai.');
		}
		else{
			echo json_encode($status = 'E-mail sudah dipakai.');
		}
		// echo "<pre>";
		// echo var_dump($ketersediaan);
		// echo "</pre>";
	}
}

/* End of file Register.php */
/* Location: ./application/controllers/Register.php */