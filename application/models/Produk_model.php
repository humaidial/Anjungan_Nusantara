<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk_model extends CI_Model {

	var $table = "produk";

	public function GetProduk($id)
    {
        $query =  $this->db->query("SELECT p.produk_id,p.produk_nama, p.produk_harga,p.produk_stock,p.produk_deskripsi,p.produk_subkategori_id,p.produk_usaha_id,p.produk_status, subka.subkategori_nama FROM produk as p inner join usaha as u on u.usaha_id = p.produk_usaha_id inner join profile as pr on pr.profile_id = u.usaha_profile_id inner join subkategori as subka on subka.subkategori_id = p.produk_subkategori_id where pr.profile_id=$id");
        return $query->result();
    }

    public function get_next_id()
	  {
	    $query =  $this->db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'db_anjungan_nusantara' AND TABLE_NAME = 'produk'");
	    return $query->row(0);
	  }

	public function list_gambar($id, $data){
			$data_input = array('list_produk_id' => $id, 'list_gambar' => $data);
			$this->db->insert('list_gambar_produk',$data_input);
	}

	public function insert($data)
	{
		$insert = $this->db->insert($this->table,$data);
	}

	public function get_foto_produk($data)
    {
          $query = $this->db->get_where('list_gambar_produk', $data);
          return $query->result();
    }

    public function update($id, $data)
        {
          $this->db->where('produk_id', $id);
          $this->db->update($this->table, $data);
      }
	

}

/* End of file Produk_model.php */
/* Location: ./application/models/Produk_model.php */