<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Departemen_m extends CI_Model{

    public function get_data(){
        $this->db->select("*");
        $this->db->from("departemen d");
        // $this->db->join("departemen d", "d.id_departemen = k.departemen_id");
        // $this->db->join("gaji_karyawan g", "g.id_gaji = d.id_gaji_karyawan");
        $this->db->order_by('d.id_departemen','desc');  
        $query = $this->db->get();

        return $query->result();
    }

    public function insert($tableName, $data){
        $query = $this->db->insert($tableName, $data);
    }

    public function update_karyawan($tableName, $data, $where){
        $query = $this->db->update($tableName, $data, $where);

    }

    public function hapus_data($where, $table){
		$this->db->where($where);
        $this->db->delete($table);
    }
    
    public function get_departemen(){
        $this->db->select("*");
        $this->db->from("departemen d");
        $this->db->join("gaji_karyawan g", "g.id_gaji = d.id_gaji_karyawan");
        $this->db->order_by('d.id_departemen','desc');  
        $query = $this->db->get();

        return $query->result();
    }

}