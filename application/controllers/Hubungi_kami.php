<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hubungi_kami extends CI_Controller
{

    public function index()
    {
        $data['active_page'] = 'hubungi_kami';
        $this->load->view('template/header', $data);
        $this->load->view('hubungi_kami');
        $this->load->view('template/footer');
    }

    public function kirim_pesan($id)
    {
        if ($this->input->post('captcha') == $this->session->userdata('captchaword')) {
            $data = [
                'nama'      => $this->input->post('nama'),
                'no_hp'     => $this->input->post('no_hp'),
                'email'     => $this->input->post('email'),
                'pesan'     => $this->input->post('isi_pesan')
            ];
            if ($this->db->insert('tb_customer_message', $data)) {
                $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            Berhasil mengirim pesan
                                                            </div>');
                redirect('profil_kendaraan/index/' . $id . '/#hubungikami');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                        </button>
                                                        Kode keamanan salah
                                                        </div>');
            redirect('profil_kendaraan/index/' . $id . '/#hubungikami');
        }
    }
}
