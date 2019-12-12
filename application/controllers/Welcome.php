<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
		$this->load->model('Produk_model');
		$this->load->model('Subkategori_model');

		if ($this->session->userdata('logged_in')) {
			$session_data=$this->session->userdata('logged_in');
			$data['username'] = $session_data['username'];
			$data['level']=$session_data['level'];
		}
		
	}
	
	public function index()
	{
		$kategori = $this->Kategori_model->get_all();
		$subkategori = $this->Kategori_model->get_kategori_dan_sub();
		$produk = $this->Produk_model->get_produk_rilis();
		$produk_minggu_ini = $this->Produk_model->get_produk_minggu();
		$produk_baru_terjual = $this->Produk_model->get_baru_Terjual();
		$produk_rating = $this->Produk_model->get_produk_by_rating();
		$kategori_populer = $this->Kategori_model->kategori_populer();
		$terjual_terbanyak = $this->Produk_model->get_produk_jual_terbanyak();
		$data = array(
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'produk' => $produk,
			'produk_minggu_ini' => $produk_minggu_ini,
			'produk_baru_terjual' => $produk_baru_terjual,
			'produk_rating' => $produk_rating,
			'kategori_populer' => $kategori_populer,
			'terjual_terbanyak' => $terjual_terbanyak
		);
		$this->load->view('home/home', $data);
		$this->load->helper('url');
	}

	public function dataindex()
	{
		$kategori = $this->Kategori_model->get_all();
		$subkategori = $this->Kategori_model->get_kategori_dan_sub();
		$produk = $this->Produk_model->get_produk_rilis();
		$produk_minggu_ini = $this->Produk_model->get_produk_minggu();
		$produk_baru_terjual = $this->Produk_model->get_baru_Terjual();
		$produk_rating = $this->Produk_model->get_produk_by_rating();
		$kategori_populer = $this->Kategori_model->kategori_populer();
		$terjual_terbanyak = $this->Produk_model->get_produk_jual_terbanyak();
		$data = array(
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'produk' => $produk,
			'produk_minggu_ini' => $produk_minggu_ini,
			'produk_baru_terjual' => $produk_baru_terjual,
			'produk_rating' => $produk_rating,
			'kategori_populer' => $kategori_populer,
			'terjual_terbanyak' => $terjual_terbanyak
		);
		// $this->load->view('home/homepage');
		echo "<pre>";
		echo var_dump($data);
		echo "</pre>";
	}

	public function detail_produk($id)
	{	$detail = $this->Produk_model->get_detail_produk($id);
		$data = array(
			'detail' => $detail
		);
		$this->load->view('home/detail_product', $data);
	}

	public function show_produk($tipe,$id){
		$kategori = $this->Kategori_model->get_all();
		$subkategori = $this->Kategori_model->get_kategori_dan_sub();

		if($tipe == "semua"){
			echo "Halo";
		}
		else if($tipe == "subkategori"){
			$hasil = $this->Produk_model->GetProdukBySubKategori($id);
			$namasubkategori = $this->Subkategori_model->get_nama_where($id);
			$data = array(
				'kategori' => $kategori,
				'judul' => "Subkategori ".$namasubkategori[0]->subkategori_nama,
				'subkategori' => $subkategori,
				'hasil' => $hasil
			);
		}
		// echo "<pre>";
		// echo var_dump($data);
		// echo "</pre>";
		$this->load->view('home/semua_produk', $data);
	}

	public function keranjang(){
		$this->load->view('home/keranjang');
	}
}
