<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usaha_model extends CI_Model {

	public function cek_usaha($id)
	{
		$query =  $this->db->query("SELECT * FROM usaha inner join profile on usaha.usaha_profile_id = profile.profile_id WHERE usaha.usaha_profile_id = '$id'");
		if($query->num_rows() == 0){
			return true;
		}
		else{
			return false;
		}
	}

}

/* End of file Usaha_model.php */
/* Location: ./application/models/Usaha_model.php */