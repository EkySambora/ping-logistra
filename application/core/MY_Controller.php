<?php 

class My_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Karyawan_m','karyawan_m');
		$this->load->model('Gaji_m','gaji_m');
		$this->load->model('Departemen_m','departemen_m');
		$this->load->model('Laporan_m','laporan_m');

	}
}