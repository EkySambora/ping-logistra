<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Laporan_m extends CI_Model{

    public function laporan(){
        $this->db->select("*");
        $this->db->from("karyawan k");
        $this->db->join("status_cat s", "s.id_status = k.status");
        $this->db->join("pendidikan_cat p", "p.id_pendidikan_cat = k.pendidikan");
        $this->db->join("departemen d", "d.id_departemen = k.departemen_id");
        $this->db->join("gaji_karyawan g", "g.id_karyawan = k.id_karyawan");
        $this->db->join("penilaian_karyawan pk", "pk.id_karyawan = k.id_karyawan");

        $this->db->order_by('k.departemen_id','asc');  
        $query = $this->db->get();

        return $query->result();
    }

}