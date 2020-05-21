<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends My_Controller {

	private $_table = "karyawan";

	public function index()
	{
		$data['content'] = 'pages/karyawan/index';
		$data['karyawan'] = $this->karyawan_m->get_karyawan();
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
        redirect('karyawan');
	}

	public function delete_data($id_karyawan)
	{
		$where = ['id_karyawan' => $id_karyawan];
		$this->karyawan_m->delete_karyawan('karyawan', $where);

		redirect('karyawan');
	}

    public function update()
    {
        $post = $this->input->post();
        $this->id_departemen = $post["id"];
        $this->nama_departemen = $post["nama_departemen"];

        $this->db->update($this->_table, $this, array('id_departemen' => $post['id']));
        redirect("departemen");
    }

}