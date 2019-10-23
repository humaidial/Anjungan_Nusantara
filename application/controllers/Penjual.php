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
			$this->buat_usaha_baru();
		}
		else{
			$this->dashboard();
		}
	}

	public function dashboard()
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
			'sidebar' => 'penjual/sidebar_baru',
			'content' => 'penjual/buat_baru',
			'footer' => 'penjual/footer',
			'error' => ''
		];
		$this->load->view('penjual/template',$data);
	}

	public function buat_produk_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar_produk_baru',
			'content' => 'penjual/dashboard_produk_baru',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function success_daftar()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar_produk_baru',
			'content' => 'penjual/success_daftar',
			'footer' => 'penjual/footer',
		];

		$this->load->view('penjual/template',$data);
	}

	public function form_produk_baru()
	{
		$data = [
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/buat_produk_baru',
			'footer' => 'penjual/footer',
		];
		$this->load->view('penjual/template',$data);
	}

	public function profil()
	{
		$para = array('usaha_profile_id' => $this->session->userdata('profile_id'));
		$usaha_data = $this->Usaha_model->getUser($para);
		$data = [
			'usaha_data' => $usaha_data,
			'notif' => $this->notif_about_akun(),
			'sidebar' => 'penjual/sidebar',
			'content' => 'penjual/profil',
			'footer' => 'penjual/footer',
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
		$next = $this->Usaha_model->get_next_id();
		$usaha_id = $next->AUTO_INCREMENT;
		
		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
			$usahaId =$session_data['profile_id'];
		}

		$this->load->library('form_validation');
		$this->load->model('Usaha_model');
		$this->form_validation->set_rules('usaha_nama','Nama Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_alamat','Alamat Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_no_telp','No. Telp','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_foto','Foto Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_profil','Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_profile_id','Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->load->helper('url','form');
		// $data['create_penjual']= $this->Admin_Model->getcreate_penjual($id);

        if($this->form_validation->run()==FALSE)
        {
            $this->form_usaha_baru();
        }
        else
        {
          $config['upload_path'] = './assets/foto/foto_usaha';
          $config['allowed_types'] = 'jpg|png';
          $config['file_name'] = $usaha_id;
          $this->load->library('upload', $config, 'fotoupload');
          $this->fotoupload->initialize($config);
           // unlink(FCPATH."./assets/img/".$hasil[0]);

            if (!$this->fotoupload->do_upload('usaha_foto'))
              {
              		$error = array('error' => $this->upload->display_errors());

                     $this->load->view('Penjual/tes', $error);
              }
            else
              {
				  $namafile = $this->fotoupload->data('file_name');
				  $session_data=$this->session->userdata('logged_in');
				  // var_dump($namafile);

				  $data = array(
				  	'usaha_nama' => $this->input->post('usaha_nama'),
				  	'usaha_alamat' => $this->input->post('usaha_alamat'),
				  	'usaha_no_telp' => $this->input->post('usaha_no_telp'),
				  	'usaha_email' => $this->input->post('usaha_email'),
				  	'usaha_foto' => $namafile,
				  	'usaha_keterangan' => $this->input->post('usaha_keterangan'),
				  	'usaha_profile_id' => $this->session->userdata('profile_id'),
				  );

				  $this->Usaha_model->insert($data);
				  $this->success_daftar();
              }
        }
	}

	public function update_usaha($id)
	{
		$this->load->library('form_validation');
		$this->load->model('Usaha_model');
		$this->form_validation->set_rules('usaha_nama','Nama Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_alamat','Alamat Toko','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_no_telp','No. Telp','required',array('required' => '%s tidak boleh kosong.'));
		$this->form_validation->set_rules('usaha_email','E-mail','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_foto','Foto Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_profil','Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->form_validation->set_rules('usaha_profile_id','Profil','required',array('required' => '%s tidak boleh kosong.'));
		// $this->load->helper('url','form');
		// $data['create_penjual']= $this->Admin_Model->getcreate_penjual($id);

        if($this->form_validation->run()==FALSE)
        {
        	$para = array('usaha_id' => $id);
			$usaha_data = $this->Usaha_model->getUser($para);
			$data = [
				'usaha_data' => $usaha_data,
				'notif' => $this->notif_about_akun(),
				'sidebar' => 'penjual/sidebar',
				'content' => 'penjual/update_profil',
				'footer' => 'penjual/footer',
			];
			$this->load->view('penjual/template',$data);
        }
        else
        {

           if (!empty($_FILES['usaha_foto']['name']))
			{
				$para = array('usaha_profile_id' => $this->session->userdata('profile_id'));
				$usaha_data = $this->Usaha_model->getUser($para);

		    	  $config['upload_path'] = './assets/foto/foto_usaha';
		          $config['allowed_types'] = 'jpg|png';
		          $config['file_name'] = $usaha_data[0]->usaha_id;
		          $this->load->library('upload', $config, 'fotoupload');
		          $this->fotoupload->initialize($config);
		    	  unlink(FCPATH."assets/foto/foto_usaha/".$usaha_data[0]->usaha_foto);
				  $this->fotoupload->do_upload('usaha_foto');
				  $namafile = $this->fotoupload->data('file_name');
		    };

				  $data = array(
				  	'usaha_nama' => $this->input->post('usaha_nama'),
				  	'usaha_alamat' => $this->input->post('usaha_alamat'),
				  	'usaha_no_telp' => $this->input->post('usaha_no_telp'),
				  	'usaha_email' => $this->input->post('usaha_email'),
				  	'usaha_foto' => $namafile,
				  	'usaha_keterangan' => $this->input->post('usaha_keterangan'),
				  	'usaha_profile_id' => $this->session->userdata('profile_id'),
				  );

				  $this->Usaha_model->update($id, $data);
				  $this->profil();
        }
	}

}

/* End of file Penjual.php */
/* Location: ./application/controllers/Penjual.php */
