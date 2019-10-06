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
		$query =  $this->db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'db_anjungan_nusantara' AND TABLE_NAME = 'login'");
		return $query->row(0);
	}

	public function profile_and_login($level = null)
	{
		if($level != null){
			$query =  $this->db->query("SELECT * FROM login inner join profile on login.login_profile_id = profile.profile_id WHERE login.login_level = '$level'");
		}
		
		return $query->result();
	}

}

/* End of file Profile_model.php */
/* Location: ./application/models/Profile_model.php */