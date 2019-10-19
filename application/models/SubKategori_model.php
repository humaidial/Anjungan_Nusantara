<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SubKategori_model extends CI_Model {

	var $table = "subkategori";

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
		else{
			return false;
		}
		
	}

	public function delete($data)
	{
		$delete = $this->db->delete($this->table,$data);
		if($delete){
			return true;
		}
		else{
			return false;
		}
	}

	public function update($data, $id)
	{
		$this->db->where('kategori_id', $id);
		$update = $this->db->update($this->table, $data);
		if($update){
			return true;
		}
		else{
			return false;
		}
	}

}

/* End of file Kategori_model.php */
/* Location: ./application/models/Kategori_model.php */