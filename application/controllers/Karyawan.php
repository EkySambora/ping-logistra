<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karyawan extends My_Controller {

	private $_table = "karyawan";

	public function index()
	{
		$data['content']    = 'pages/karyawan/index';
		$data['karyawan']   = $this->karyawan_m->get_karyawan();
		$data['departemen'] = $this->karyawan_m->get_departemen();
		$data['jk']         = $this->db->get('Jenis_kelamin_cat')->result();
		$data['pendidikan'] = $this->db->get('pendidikan_cat')->result();
		$data['status_cat']     = $this->db->get('status_cat')->result();
		$data['penilaian_karyawan']     = $this->db->get('penilaian_karyawan')->result();
		$this->load->view('layout', $data);
	}

	public function add()
	{
        $this->karyawan_m->insert_karyawan($this->_table, [
			'nik' => $this->input->post('nik'),
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'alamat'  => $this->input->post('alamat'),
			'ttl' => $this->input->post('ttl'),
			'status' => $this->input->post('status'),
			'pendidikan' => $this->input->post('pendidikan'),
			'no_hp' => $this->input->post('no_hp'),
			'departemen_id' => $this->input->post('departemen_id')
		]);

		$this->db->insert('gaji_karyawan', [
			'salary' => $this->input->post('salary'),
			'id_karyawan' => $this->db->insert_id(),
		]);
		
		redirect('karyawan');
	}

	public function beri_nilai(){
		

		$post = $this->input->post();

		$this->nik = $post['nik'];
		$this->nama = $post['nama'];
		$this->jk = $post['jk'];
		$this->alamat = $post['alamat'];
		$this->ttl = $post['ttl'];
		$this->status = $post['status'];
	 	$this->pendidikan = $post['pendidikan'];
	 	$this->no_hp = $post['no_hp'];
		$this->departemen_id = $post['departemen_id'];
		$this->penilaian = $post['penilaian'];

        $this->db->update($this->_table, $this, array('id_karyawan' => $post['id']));
		$this->db->insert('penilaian_karyawan', [
			'nilai' => $this->input->post('nilai'),
			'id_karyawan' => $this->input->post('id'),
		]);
		
		redirect('karyawan');
	}

	public function delete_data($id_karyawan)
	{
		$where = ['id_karyawan' => $id_karyawan];
		$this->karyawan_m->delete_karyawan('karyawan', $where);
		$this->db->delete('penilaian_karyawan', $where);
		$this->db->delete('gaji_karyawan', $where);

		redirect('karyawan');
	}

    public function update()
    {
        $post = $this->input->post();

		$this->nik = $post['nik'];
		$this->nama = $post['nama'];
		$this->jk = $post['jk'];
		$this->alamat = $post['alamat'];
		$this->ttl = $post['ttl'];
		$this->status = $post['status'];
	 	$this->pendidikan = $post['pendidikan'];
	 	$this->no_hp = $post['no_hp'];
	 	$this->departemen_id = $post['departemen_id'];
		// $this->penilaian = $post['penilaian'];

        $this->db->update($this->_table, $this, array('id_karyawan' => $post['id']));
        redirect("karyawan");
    }

}