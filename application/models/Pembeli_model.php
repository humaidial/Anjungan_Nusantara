<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembeli_model extends CI_Model {

    public function get_pesanan($id){
        $query =  $this->db->query("SELECT * FROM pembelian INNER join profile on profile_id = id_pembeli where id_pembeli = '$id'");
        return $query->result();
    }
}

/* End of file Pembeli_model   .php */
