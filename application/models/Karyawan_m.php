<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Karyawan_m extends CI_Model{

    public function get_karyawan(){
        $query = $this->db->get("karyawan");
        return $query;
    }


}