<?php
defined('BASEPATH') or exit('No direct script access allowed');

class News_event extends CI_Controller
{

    public function index()
    {
        $data['active_page'] = 'newsevent';
        $this->load->view('template/header', $data);
        $this->load->view('newsevent');
        $this->load->view('template/footer');
    }
}
