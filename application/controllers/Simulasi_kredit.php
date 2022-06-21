<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Simulasi_kredit extends CI_Controller
{

    public function index()
    {
        $data['active_page'] = 'simulasi_kredit';
        $this->load->view('template/header', $data);
        $this->load->view('simulasi_kredit');
        $this->load->view('template/footer');
    }
}
