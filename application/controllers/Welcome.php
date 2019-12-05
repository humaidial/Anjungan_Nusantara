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
		$produk_minggu_ini = $this->Produk_model->get_produk_minggu();
		$produk_baru_terjual = $this->Produk_model->get_baru_Terjual();
		$produk_rating = $this->Produk_model->get_produk_by_rating();
		$kategori_populer = $this->Kategori_model->kategori_populer();
		$subkategori_populer = $this->Kategori_model->subkategori_populer();
		$terjual_terbanyak = $this->Produk_model->get_produk_jual_terbanyak();
		$produk_terbaru = array();
		$i = 1;
		foreach($subkategori_populer as $key){
			$temp = $this->Produk_model->get_produk_by_kategori($key->subkategori_id);
			array_push($produk_terbaru, $temp);
			if ($i++ == 3) break;
		}
		$data = array(
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'produk' => $produk,
			'produk_minggu_ini' => $produk_minggu_ini,
			'produk_baru_terjual' => $produk_baru_terjual,
			'produk_rating' => $produk_rating,
			'kategori_populer' => $kategori_populer,
			'subkategori_populer' => $subkategori_populer,
			'terjual_terbanyak' => $terjual_terbanyak,
			'produk_terbaru' => $produk_terbaru
		);
		$this->load->view('home/home', $data);
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
		$subkategori_populer = $this->Kategori_model->subkategori_populer();
		$terjual_terbanyak = $this->Produk_model->get_produk_jual_terbanyak();
		$produk_terbaru = array();
		$i = 1;
		foreach($subkategori_populer as $key){
			$temp = $this->Produk_model->get_produk_by_kategori($key->subkategori_id);
			array_push($produk_terbaru, $temp);
			if ($i++ == 3) break;
		}
		$data = array(
			'kategori' => $kategori,
			'subkategori' => $subkategori,
			'produk' => $produk,
			'produk_minggu_ini' => $produk_minggu_ini,
			'produk_baru_terjual' => $produk_baru_terjual,
			'produk_rating' => $produk_rating,
			'kategori_populer' => $kategori_populer,
			'subkategori_populer' => $subkategori_populer,
			'terjual_terbanyak' => $terjual_terbanyak,
			'produk_terbaru' => $produk_terbaru
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
}
