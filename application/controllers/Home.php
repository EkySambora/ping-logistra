<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends My_Controller {


	public function index()
	{
		$data['content'] = 'pages/home/index';
        $data['laporan']   = $this->laporan_m->laporan();

		$this->load->view('layout', $data);
	}

}