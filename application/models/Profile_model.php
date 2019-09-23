<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {

	var $table = "profile";

	public function insert($data)
	{
		$insert = $this->db->insert($this->table,$data);
		if($insert){
			return true;
		}
		return false;
	}

	public function get_next_id()
	{
		$query =  $this->db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'anjungan_nusantara' AND TABLE_NAME = 'login'");
		return $query->row(0);
	}

}

/* End of file Profile_model.php */
/* Location: ./application/models/Profile_model.php */