<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Booking_service extends CI_Controller
{

    public function index()
    {
        $data['active_page'] = 'booking_service';
        $this->load->view('template/header', $data);
        $this->load->view('booking_service');
        $this->load->view('template/footer');
    }

    function proses()
    {
        $data = [
            'nama' => $this->input->post('nama'),
            'no_hp' => $this->input->post('no_hp'),
            'tipe_mobil' => $this->input->post('tipe_mobil'),
            'no_polisi' => $this->input->post('no_polisi'),
            'atas_nama_stnk' => $this->input->post('atas_nama_stnk'),
            'tipe_service' => $this->input->post('tipe_service'),
            'tgl_service' => $this->input->post('tanggal_service'),
            'keluhan' => $this->input->post('keluhan')
        ];
        if ($this->db->insert('tb_service', $data)) {
            $this->session->set_flashdata('message', '<div class="alert alert-success">Berhasil booking service</div>');
            redirect('booking_service');
        }
    }
}
