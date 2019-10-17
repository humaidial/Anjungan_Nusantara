<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_model extends CI_Model {

	var $table = "kategori";

	public function get_all()
	{
		$this->db->select('*');
		$this->db->from($this->table);
		$query = $this->db->get();
		if($query->num_rows() != 0){
			return $query->result();
		}
		else{
			return false;
		}
	}

	public function insert($data)
	{
		$insert = $this->db->insert($this->table,$data);
		if($insert){
			return true;
		}
		return false;
	}

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */