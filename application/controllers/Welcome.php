<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Kategori_model');
		$this->load->model('Produk_model');
	}
	
	public function index()
	{
		$kategori = $this->Kategori_model->get_all();
		$subkategori = $this->Kategori_model->get_kategori_dan_sub();
		$produk = $this->Produk_model->get_produk_rilis();
		$produk = 
		$data = array(
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'produk' => $produk,
		);
		$this->load->view('home/homepage', $data);
	}

	public function dataindex()
	{
		$kategori = $this->Kategori_model->get_all();
		$subkategori = $this->Kategori_model->get_kategori_dan_sub();
		$produk = $this->Produk_model->get_produk_rilis();
		$produk = 
		$data = array(
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'produk' => $produk,
		);
		// $this->load->view('home/homepage');
		echo "<pre>";
		echo var_dump($data);
		echo "</pre>";
	}

	public function detail()
	{
		$this->load->view('home/detail_product');
	}
}
