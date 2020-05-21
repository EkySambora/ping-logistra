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
        $nama_departemen = $this->input->post('nama_departemen');
        $id_gaji_karyawan = $this->input->post('id_gaji_karyawan');
        $this->departemen_m->insert($this->_table,[
            'nama_departemen' => $nama_departemen,
            'id_gaji_karyawan'  => $id_gaji_karyawan
        ]);
        redirect('departemen');
	}

    public function update()
    {
        $post = $this->input->post();
        $this->id_departemen = $post["id"];
        $this->nama_departemen = $post["nama_departemen"];

        $this->db->update($this->_table, $this, array('id_departemen' => $post['id']));
        redirect("departemen");
    }

	public function delete($id_departemen)
	{
		$where = array('id_departemen' => $id_departemen);
		$this->departemen_m->hapus_data($where, $this->_table);
		redirect('departemen');
	}
}