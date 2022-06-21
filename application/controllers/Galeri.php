<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    public function index()
    {
        $data['active_page'] = 'galeri';
        $this->load->view('template/header', $data);
        $this->load->view('galeri');
        $this->load->view('template/footer');
    }
}
