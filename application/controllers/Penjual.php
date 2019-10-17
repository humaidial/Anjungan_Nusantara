<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penjual extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Login_model');
		$this->load->model('Profile_model');
		$this->load->model('Usaha_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
			$usahaId =$session_data['profile_id'];

			// if($this->cek_usaha($usahaId) == "Belum Ada"){
			// 	$this->buat_usaha_baru();
			// }
			// else{
			// 	$this->index();
			// }

		}
		else{
			echo '<script>alert("Anda Belum Login")</script>';
			redirect('Login','refresh');
		}
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

	public function form_usaha_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/buat_baru',
			'footer' => 'penjual/footer',
			'error' => ''
		];
		$this->load->view('penjual/template',$data);
	}

	public function notif_about_akun()
	{
		$notifakun = $this->Login_model->get_data_belum_verifikasi();
		$notiflainnya = 0;
		return(array($notifakun, $notiflainnya));
	}

	public function cek_usaha($id)
	{
		if($this->Usaha_model->cek_usaha($id)){
			return "Belum Ada";
		}
		else{
			return "Sudah Ada";
		}
	}

	public 	function tes()
	{
		$this->load->view('penjual/dashboard');
	}

	public function create_penjual()
	{
		
		$this->load->library('form_validation');
		$this->load->model('Usaha_model');
		$this->form_validation->set_rules('usaha_nama','Nama Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_alamat','Alamat Toko',array('required'=> '% tidak boleh kosong'));
		$this->form_validation->set_rules('usaha_no_telp','No. Telp','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_foto','Foto Profil','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_profil','Profil','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_profile_id','Profil','required',array('required' => '%s tidak boleh kosong.'));
		$this->load->helper('url','form');
		// $data['create_penjual']= $this->Admin_Model->getcreate_penjual($id);

        if($this->form_validation->run()==FALSE)
        {
            $this->load->view('penjual/buat_baru');
        }
        else
        {
          $config['upload_path'] = './assets/gambar/';
          $config['allowed_types'] = 'gif|jpg|png';
          $config['max_size']         = '1000000000';
          $config['max_width']        = '10240';
          $config['max_height']       = '6780';

            $this->load->library('upload', $config) ;
            if ( ! $this->upload->do_upload('userfile'))
              {
                // echo $this->upload->display_errors();
                $error = array('error' => $this->upload->display_errors());
								$data = [
									'notif' => $this->notif_about_akun(),
									'sidebar' => 'penjual/sidebar',
									'content' => 'penjual/buat_baru',
									'footer' => 'penjual/footer',
									'error' => $error
								];
								$this->load->view('penjual/template',$data);
              }
            else
              {
                // $this->Admin_Model->updategunung($id);
                // $this->load->view('Penjual/test');
								var_dump("succces");
              }
        		}

	}

}

/* End of file Penjual.php */
/* Location: ./application/controllers/Penjual.php */
