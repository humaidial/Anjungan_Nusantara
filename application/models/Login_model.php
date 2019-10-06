<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	var $table = "login";

	public function insert($data)
	{
		$insert = $this->db->insert($this->table,$data);
		if($insert){
			return true;
		}
		return false;
	}

	public function checkemail($email)
	{
		$this->db->select('e_mail');
		$this->db->from($this->table);
		$this->db->where('e_mail',$email);
		$query = $this->db->get();
		if($query->num_rows() == 0){
			return true;
		}
		else{
			return false;
		}
	}

	public function login($email,$password)
    {
        $this->db->select('login_id,e_mail,password,login_level,login_status');
        $this->db->from($this->table);
        $this->db->where('e_mail', $email);
        $this->db->where('password', $password);
        $query = $this->db->get();
        if($query->num_rows()==1){
            return $query->result();
        }else{
            return false;
        }                        
    }

}

/* End of file Login_model.php */
/* Location: ./application/models/Login_model.php */