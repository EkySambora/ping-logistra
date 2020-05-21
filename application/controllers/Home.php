<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

    private $_table = "gaji_karyawan";

	public function index()
	{
		$data['content'] = 'pages/home/index';
		// $data['gaji'] = $this->gaji_m->get_gaji();
		$this->load->view('layout', $data);
	}

	// public function add()
	// {
    //     $salary = $this->input->post('salary');
    //     $nilai = $this->input->post('nilai');
    //     $this->gaji_m->insert_gaji($this->_table,[
    //         'salary' => $salary,
    //         'nilai'  => $nilai
    //     ]);
    //     redirect('gaji');
	// }

    // public function update()
    // {
    //     $post = $this->input->post();
    //     $this->id_gaji = $post["id"];
    //     $this->salary = $post["salary"];
    //     $this->nilai = $post["nilai"];

    //     $this->db->update($this->_table, $this, array('id_gaji' => $post['id']));
    //     redirect("gaji");
    // }

	// public function deleteData($id_gaji)
	// {
	// 	$where = array('id_gaji' => $id_gaji);
	// 	$this->gaji_m->hapus_data_gaji($where, $this->_table);
	// 	redirect('gaji');
	// }
}