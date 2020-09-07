<?php

class Menittoday extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        //ini mending jangan diubah biar ga ribet
        $data['inputan'] = $this->input->post('satuan');

        //Rumus/konstanta diganti sesuai konversi masing2
        $hasil['hitung'] = $data['inputan'] / 1440;

        //Ini diganti sesuai nama kelompok & view masing2
        $this->load->view('kelompok5/menit', $hasil);
    }

}