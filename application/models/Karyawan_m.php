<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Karyawan_m extends CI_Model{

    public function get_karyawan(){
        $this->db->select("*");
        $this->db->from("karyawan k");
        $this->db->join("status_cat s", "s.id_status = k.status");
        $this->db->join("pendidikan_cat p", "p.id_pendidikan_cat = k.pendidikan");
        $this->db->join("departemen d", "d.id_departemen = k.departemen_id");
        $this->db->join("gaji_karyawan g", "g.id_karyawan = k.id_karyawan");
        // $this->db->join("penilaian_karyawan pk", "pk.id_karyawan = k.id_karyawan");

        $this->db->order_by('k.departemen_id','asc');  
        $query = $this->db->get();

        return $query->result();
    }

    public function insert_karyawan($tableName, $data){
        $query = $this->db->insert($tableName, $data);
        return $query;
    }

    public function delete_karyawan($tableName,$where){
		$this->db->where($where);
        $this->db->delete($tableName);
    }
    
    public function get_departemen(){
        $this->db->select("*");
        $this->db->from("departemen d");
        // $this->db->join("gaji_karyawan g", "g.id_gaji = d.id_gaji_karyawan");
        $this->db->order_by('d.id_departemen','desc');  
        $query = $this->db->get();

        return $query->result();
    }

}