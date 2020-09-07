<?php
class tan extends CI_Controller
{
    function __construct()
    {
    parent::__construct();
    $this->load->helper(array('url','form'));
    }

    public function index()
    {
      $data['x1']=(int)$this->input->post('x1',true);
      $data['result']=tan($data['x1']);
      $this->load->view('kelompok9/vtan',$data);
   }
}
