<?php
class konversitrigonometri extends CI_Controller
{
    function __construct()
    {
    parent::__construct();
    $this->load->helper(array('url','form'));
    }

    public function index()
    {
        //$this->load->view("home");
        $data['x1']=(int)$this->input->post('x1',true);
        $data['result']=sin($data['x1']);
        $this->load->view('kelompok9/sin',$data);
    }

    public function asin()
    {

    }
}
