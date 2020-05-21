<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Departemen extends My_Controller {

    private $_table = "departemen";

	public function index()
	{
		$data['content'] = 'pages/departemen/index';
		$data['departemen'] = $this->departemen_m->get_data();
		$this->load->view('layout', $data);
	}

	public function add()
	{
        // $salary = $this->input->post('salary');
        // $nilai = $this->input->post('nilai');
        // $this->gaji_m->insert_gaji($this->_table,[
        //     'salary' => $salary,
        //     'nilai'  => $nilai
        // ]);
        // redirect('gaji');
	}

    public function update()
    {
        // $post = $this->input->post();
        // $this->id_gaji = $post["id"];
        // $this->salary = $post["salary"];
        // $this->nilai = $post["nilai"];

        // $this->db->update($this->_table, $this, array('id_gaji' => $post['id']));
        // redirect("gaji");
    }

	public function delete($id_departemen)
	{
		$where = array('id_departemen' => $id_departemen);
		$this->departemen_m->hapus_data($where, $this->_table);
		redirect('departemen');
	}
}