<?php 

class Tahunhari extends CI_Controller {

	public function index(){

		$data['judul'] = 'Pemrograman Framework';
		$data['tahun'] = $this->input->post('tahun', true);
		$data['hari'] = $data['tahun'] * 365 ;
		$this->load->view('kelompok7/tahunhari/index', $data);

	}

}