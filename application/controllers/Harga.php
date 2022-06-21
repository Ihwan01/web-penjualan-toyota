<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Harga extends CI_Controller
{

    public function index()
    {
        $data['mobil'] = $this->db->get('tb_mobil')->result_array();
        $data['active_page'] = 'harga';
        $this->load->view('template/header', $data);
        $this->load->view('harga');
        $this->load->view('template/footer');
    }
}
