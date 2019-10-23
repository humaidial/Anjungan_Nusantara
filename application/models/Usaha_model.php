<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usaha_model extends CI_Model {

  var $table = "usaha";

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

  public function get_next_id()
  {
    $query =  $this->db->query("SELECT AUTO_INCREMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'db_anjungan_nusantara' AND TABLE_NAME = 'usaha'");
    return $query->row(0);
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

	 public function getBuat_baru()
          {
            
              $query= $this->db->get('usaha');
              return $query->result();
          }

          public function getUpdate_Usaha($Id)
          {
            $this->db->where('id_user',$Id);
            $query = $this->db->get('usaha');
            return $query->result();
          }

        public function GetUser($data)
        {
          $query = $this->db->get_where('usaha', $data);
          return $query->result();
        }

        public function update($id, $data)
        {
          $this->db->where('usaha_id', $id);
          $this->db->update($this->table, $data);
        }

}

/* End of file Usaha_model.php */
/* Location: ./application/models/Usaha_model.php */