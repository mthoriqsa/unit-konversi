<?php

	class Mbkb extends CI_Controller
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
			$hasil['hitung'] = $data['inputan'] * 3.6;
			$hasil['hitung1'] = $data['inputan'] * 2.2369;
			$hasil['hitung2'] = $data['inputan'] * 3.2808;
			$hasil['hitung3'] = $data['inputan'] * 1.943;

			//Ini diganti sesuai nama kelompok & view masing2
			$this->load->view('kelompok3/v_mbkb',$hasil);
		}

	}
?>
