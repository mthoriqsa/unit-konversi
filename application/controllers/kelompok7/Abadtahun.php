<?php 

class Abadtahun extends CI_Controller {

	public function index(){

		$data['judul'] = 'Pemrograman Framework';
		$data['abad'] = $this->input->post('abad', true);
		$data['tahun'] = $data['abad'] * 100;
		$this->load->view('kelompok7/abadtahun/index', $data);

	}

}