<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dl extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper(array('url','form')); //mengambil helper yang sudah disediakan CI
    }
    public function index()
    {
      $this->load->library('form_validation');
      $this->form_validation->set_rules('v1','Variabel 1','required|integer');
      // $this->form_validation->set_rules('v2','Variabel 2','required|integer');
      if ($this->form_validation->run())
      {
        $data['v1']=(int)$this->input->post('v1',true);
        // $data['v2']=(int)$this->input->post('v2',true);
        $data['hasil']=$data['v1']*10;

      }
      else
      {
        $data['v1']=0;
        $data['hasil']=0;
      }
        $this->load->view('kelompok2/v_dl',$data);
    }
}
?>
