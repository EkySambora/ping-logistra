<?php 

class My_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_m','karyawan_m');
		$this->load->model('Gaji_m','gaji_m');
	}
}