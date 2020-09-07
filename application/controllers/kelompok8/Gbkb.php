<?php 

	class Gbkb extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
		}
		
		public function index() 
		{
			//ini mending jangan diubah biar ga ribet
			$data['inputan'] = $this->input->post('satuan');

			//Rumus/konstanta diganti sesuai konversi masing2
			$hasil['hitung'] = $data['inputan'] * 1024 * 1024;

			//Ini diganti sesuai nama kelompok & view masing2
			$this->load->view('kelompok8/v_gbkb',$hasil);	
		}

	}
?>