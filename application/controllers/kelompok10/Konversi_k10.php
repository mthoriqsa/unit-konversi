<?php 
/**
 * 
 */
class Konversi_k10 extends CI_Controller
{
	public function index(){
		$pilih=$this->input->post('pilih');
		$nilai=$this->input->post('masukkan');
		if ($nilai!=null) {
			switch ($pilih) {
				case 'km':
					$a=1;
					for ($i=0; $i < 7; $i++) { 
						$hasil[$i]=$nilai*$a;
						$a=$a*10;
					}
					$data=array(
						'km'=>$hasil[0],'hm'=>$hasil[1],'dam'=>$hasil[2],'m'=>$hasil[3],'dm'=>$hasil[4],'cm'=>$hasil[5],'mm'=>$hasil[6]
					);
					break;
				case 'hm':
					$a=0.1;
					for ($i=0; $i < 7; $i++) { 
						$hasil[$i]=$nilai*$a;
						$a=$a*10;
					}
					$data=array(
						'km'=>$hasil[0],'hm'=>$hasil[1],'dam'=>$hasil[2],'m'=>$hasil[3],'dm'=>$hasil[4],'cm'=>$hasil[5],'mm'=>$hasil[6]
					);
					break;
				case 'dam':
					$a=0.01;
					for ($i=0; $i < 7; $i++) { 
						$hasil[$i]=$nilai*$a;
						$a=$a*10;
					}
					$data=array(
						'km'=>$hasil[0],'hm'=>$hasil[1],'dam'=>$hasil[2],'m'=>$hasil[3],'dm'=>$hasil[4],'cm'=>$hasil[5],'mm'=>$hasil[6]
					);
					break;
				case 'm':
					$a=0.001;
					for ($i=0; $i < 7; $i++) { 
						$hasil[$i]=$nilai*$a;
						$a=$a*10;
					}
					$data=array(
						'km'=>$hasil[0],'hm'=>$hasil[1],'dam'=>$hasil[2],'m'=>$hasil[3],'dm'=>$hasil[4],'cm'=>$hasil[5],'mm'=>$hasil[6]
					);
					break;
				case 'dm':
					$a=0.0001;
					for ($i=0; $i < 7; $i++) { 
						$hasil[$i]=$nilai*$a;
						$a=$a*10;
					}
					$data=array(
						'km'=>$hasil[0],'hm'=>$hasil[1],'dam'=>$hasil[2],'m'=>$hasil[3],'dm'=>$hasil[4],'cm'=>$hasil[5],'mm'=>$hasil[6]
					);
					break;
				case 'cm':
					$km=$nilai/100000;
					$hm=$nilai/10000;
					$dam=$nilai/1000;
					$m=$nilai/100;
					$dm=$nilai/10;
					$cm=$nilai;
					$mm=$nilai*10;

					$data=array(
						'km'=>$km,'hm'=>$hm,'dam'=>$dam,'m'=>$m,'dm'=>$dm,'cm'=>$cm,'mm'=>$mm
					);
					break;
				default:
					$km=$nilai/1000000;
					$hm=$nilai/100000;
					$dam=$nilai/10000;
					$m=$nilai/1000;
					$dm=$nilai/100;
					$cm=$nilai/10;
					$mm=$nilai;

					$data=array(
						'km'=>$km,'hm'=>$hm,'dam'=>$dam,'m'=>$m,'dm'=>$dm,'cm'=>$cm,'mm'=>$mm
					);
					break;
			}
		}else{
			$data=array(
				'km'=>0,'hm'=>0,'dam'=>0,'m'=>0,'dm'=>0,'cm'=>0,'mm'=>0
			);
		}
		$this->load->view('kelompok10/v_konversi', $data);	
	}
}
 ?>