<?php 

class Bulanhari extends CI_Controller {

	public function index(){

		$data['judul'] = 'Pemrograman Framework';
		$data['bulan'] = $this->input->post('bulan', true);
		$data['hari'] = $data['bulan'] * 30 ;
		$this->load->view('kelompok7/bulanhari/index', $data);

	}

}