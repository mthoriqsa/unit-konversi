<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hitung1 extends CI_Controller 
{

	public function index()
	{
		$this->load->view('kelompok4/htung');
	}

	//Konversi Suhu Celcius
	public function hasil() 
	{ 
  		$suhu = $this->input->post('suhu');

		if($this->input->post('ngitung')) 
	{ 
		$hasil = (4/5) * $suhu;
		$hasil1 = $suhu + 273;
		$hasil2 = ((9/5) * $suhu) + 32;
	}
		$data=array( 
		'hasil' => $hasil,
		'hasil1' => $hasil1,
   		'hasil2' => $hasil2);
 		$this->load->view('kelompok4/hasil',$data);
	}

	//Konversi Suhu Reamur
	public function hasil1() 
	{ 
 		$suhu = $this->input->post('suhu'); 
  
		if($this->input->post('ngitung')) 
		{ 
			$hasil = (5/4) * $suhu;
			$hasil1 = ((5/4) * $suhu) + 273;
			$hasil2 = (9/4) * 32;
		}
		$data=array( 
		'hasil' => $hasil,
		'hasil1' => $hasil1,
  		'hasil2' => $hasil2);
   		$this->load->view('kelompok4/hasil1',$data);
	}

	//Konversi Suhu Fahrenheit
	public function hasil2() 
	{ 
 		$suhu = $this->input->post('suhu');
  
		if($this->input->post('ngitung')) 
		{ 
			$hasil = (5/9) * ($suhu - 32);
			$hasil1 = (4/9) * ($suhu - 32);
			$hasil2 = ((5/9) * ($suhu - 32)) + 273;
		}
		$data=array( 
  		'hasil' => $hasil,
		'hasil1' => $hasil1,
  		'hasil2' => $hasil2);
  		$this->load->view('kelompok4/hasil2',$data);
	}

	//Konversi Suhu Kelvin
	public function hasil3() 
	{ 
 		$suhu = $this->input->post('suhu');
  
  		if($this->input->post('ngitung')) 
		{ 
  			$hasil = $suhu - 273;
			$hasil1 = (4/5) * ($suhu - 273);
			$hasil2 = ((9/5) * ($suhu - 273)) + 32;
		}
		$data=array( 
  		'hasil' => $hasil,
		'hasil1' => $hasil1,
  		'hasil2' => $hasil2);
   		$this->load->view('kelompok4/hasil3',$data);
	}
}

/* End of file Hitung1.php */
/* Location: ./application/controllers/kelompok4/Hitung1.php */