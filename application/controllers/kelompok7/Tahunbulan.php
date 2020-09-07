<?php 

class Tahunbulan extends CI_Controller {

	public function index(){

		$data['judul'] = 'Pemrograman Framework';
		$data['tahun'] = $this->input->post('tahun', true);
		$data['bulan'] = $data['tahun'] * 12 ;
		$this->load->view('kelompok7/tahunbulan/index', $data);

	}

}