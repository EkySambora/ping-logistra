<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {

	public function index()
	{
		$data['content'] = 'pages/home/index';
		$data['karyawan'] = $this->karyawan_m->get_karyawan();
		$this->load->view('layout', $data);
	}

	public function add()
	{
		$data['content'] = 'pages/add/index';
		$data['departemen'] = $this->karyawan_m->get_departemen();
		$this->load->view('layout', $data);
	}

	public function deleteData($id_karyawan)
	{
		$where = array('id_karyawan' => $id_karyawan);
		$this->karyawan_m->hapus_data_karyawan($where, 'karyawan');
		redirect('home');
	}
}