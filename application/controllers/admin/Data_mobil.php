<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Data_mobil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username'))
            redirect('admin/auth/login');
    }

    public function index()
    {
        $data['title'] = 'Data Mobil';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['mobil'] = $this->db->get('tb_mobil')->result_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/data_mobil', $data);
        $this->load->view('admin/template/footer');
    }

    public function edit($id)
    {
        $this->form_validation->set_rules('nama_mobil', 'Nama Mobil', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Edit Data Mobil';
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $data['mobil'] = $this->db->get_where('tb_mobil', ['id' => $id])->row_array();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/edit_data_mobil', $data);
            $this->load->view('admin/template/footer');
        } else {
            if ($_FILES['gambar']['size'] != 0) {
                $config['upload_path']          = './assets/img/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;

                $this->load->library('upload', $config);

                if (!$this->upload->do_upload('gambar')) {
                    echo $this->upload->display_errors();
                } else {
                    $gambar = $this->upload->data('file_name');
                    $data = [
                        'nama' => $this->input->post('nama_mobil'),
                        'deskripsi' => $this->input->post('deskripsi'),
                        'gambar' => $gambar
                    ];
                    if ($this->db->update('tb_mobil', $data, ['id' => $id])) {
                        redirect('admin/data_mobil');
                    }
                }
            } else {
                $data = [
                    'nama' => $this->input->post('nama_mobil'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'video' => $this->input->post('video'),
                ];
                if ($this->db->update('tb_mobil', $data, ['id' => $id])) {
                    redirect('admin/data_mobil');
                }
            }
        }
    }

    public function harga()
    {
        $data['title'] = 'Data Harga';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['mobil'] = $this->db->get('tb_mobil')->result_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/harga', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_data()
    {
        $this->form_validation->set_rules('nama_mobil', 'Nama Mobil', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Tambah Data Mobil';
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/tambah_data_mobil', $data);
            $this->load->view('admin/template/footer');
        } else {
            $config['upload_path']          = './assets/img/';
            $config['allowed_types']        = 'gif|jpg|png';
            $config['max_size']             = 2000;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('gambar')) {
                echo $this->upload->display_errors();
            } else {
                $gambar = $this->upload->data('file_name');
                $data = [
                    'nama' => $this->input->post('nama_mobil'),
                    'deskripsi' => $this->input->post('deskripsi'),
                    'video' => $this->input->post('video'),
                    'gambar' => $gambar
                ];
                if ($this->db->insert('tb_mobil', $data)) {
                    redirect('admin/data_mobil');
                }
            }
        }
    }

    public function detail($id)
    {
        $data['title'] = 'Detail Data Mobil';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['mobil'] = $this->db->get_where('tb_mobil', ['id' => $id])->row_array();
        $data['tipe_mobil'] = $this->db->get_where('tb_tipe', ['id_mobil' => $id])->result_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/detail_data_mobil', $data);
        $this->load->view('admin/template/footer');
    }

    public function tambah_tipe($id)
    {
        $this->form_validation->set_rules('nama_mobil', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Data Harga';
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $data['mobil'] = $this->db->get_where('tb_mobil', ['id' => $id])->row_array();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/tambah_tipe_mobil', $data);
            $this->load->view('admin/template/footer');
        } else {
            $data = [
                'nama' => $this->input->post('nama_mobil'),
                'harga' => $this->input->post('harga'),
                'id_mobil' => $id
            ];
            if ($this->db->insert('tb_tipe', $data)) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Berhasil menambah data!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>'
                );
                redirect('admin/data_mobil/detail/' . $id);
            }
        }
    }

    public function edit_harga($id)
    {
        $this->form_validation->set_rules('nama_mobil', 'Nama', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Data Harga';
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $data['mobil'] = $this->db->get_where('tb_tipe', ['id' => $id])->row_array();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/harga', $data);
            $this->load->view('admin/template/footer');
        } else {
            $mobil = $this->db->get_where('tb_tipe', ['id' => $id])->row_array();
            $data = [
                'nama' => $this->input->post('nama_mobil'),
                'harga' => $this->input->post('harga')
            ];
            if ($this->db->update('tb_tipe', $data, ['id' => $id])) {
                $this->session->set_flashdata(
                    'message',
                    '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                                Berhasil mengubah data!
                                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                                </div>'
                );
                redirect('admin/data_mobil/detail/' . $mobil['id_mobil']);
            }
        }
    }

    public function edit_slide($id)
    {
        $data['slide'] = $this->db->get_where('tb_slide', ['id_mobil' => $id])->row_array();
        if ($data['slide']) {
            $data['title'] = 'Edit Slide';
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $data['mobil'] = $this->db->get_where('tb_mobil', ['id' => $id])->row_array();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/edit_slide', $data);
            $this->load->view('admin/template/footer');
        } else {
            $data = [
                'gambar1' => '',
                'gambar2' => '',
                'gambar3' => '',
                'gambar4' => '',
                'gambar5' => '',
                'gambar6' => '',
                'gambar7' => '',
                'id_mobil' => $id
            ];
            if ($this->db->insert('tb_slide', $data)) {
                redirect('admin/data_mobil/edit_slide_proses/1/' . $id);
            }
        }
    }

    public function edit_slide_proses($no_gambar, $id)
    {
        $config['upload_path']          = './assets/img/slide/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 2000;

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('gambar' . $no_gambar)) {
            echo $this->upload->display_errors();
        } else {
            $this->db->where('id_mobil', $id);
            $data = [
                'gambar' . $no_gambar => $this->upload->data('file_name')
            ];
            if ($this->db->update('tb_slide', $data)) {
                redirect('admin/data_mobil/edit_slide/' . $id);
            }
        }
    }
}
