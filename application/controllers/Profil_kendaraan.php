<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil_kendaraan extends CI_Controller
{

    public function index($id_kendaraan)
    {
        $options = [
            'word' => substr(str_shuffle('123456789'), 0, 5),
            'img_path' => './assets/img/captcha/',
            'img_url' => base_url('assets/img/captcha/'),
            'img_width' => '220',
            'img_height' => '40',
            'expiration' => 7200,
            // White background and border, black text and red grid
            'colors'        => array(
                'background' => array(255, 255, 255),
                'border' => array(255, 70, 70),
                'text' => array(0, 0, 0),
                'grid' => array(255, 70, 70)
            )
        ];
        $cap = create_captcha($options);
        $data['captcha'] = $cap;

        $this->session->set_userdata('captchaword', $cap['word']);

        $data['mobil'] = $this->db->get_where('tb_mobil', ['id' => $id_kendaraan])->row_array();

        $data['slide'] = $this->db->get_where('tb_slide', ['id_mobil' => $id_kendaraan])->row_array();
        $data['tipe_mobil'] = $this->db->get_where('tb_tipe', ['id_mobil' => $id_kendaraan])->result_array();
        $data['active_page'] = 'profil_kendaraan';
        $this->load->view('template/header', $data);
        $this->load->view('profil_kendaraan', $data);
        $this->load->view('template/footer');
    }
}
