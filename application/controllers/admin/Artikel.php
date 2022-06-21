<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (!$this->session->userdata('username'))
            redirect('admin/auth/login');
    }

    public function index()
    {
        $data['title'] = 'Semua Artikel';
        $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
        $data['artikel'] = $this->db->get('tb_artikel')->result_array();
        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/template/topbar', $data);
        $this->load->view('admin/artikel', $data);
        $this->load->view('admin/template/footer');
    }

    public function buat()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'required');
        $this->form_validation->set_rules('url', 'URL', 'required');
        if ($this->form_validation->run() == FALSE) {
            $data['title'] = 'Buat Artikel';
            $data['user'] = $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('admin/template/header', $data);
            $this->load->view('admin/template/sidebar', $data);
            $this->load->view('admin/template/topbar', $data);
            $this->load->view('admin/buat_artikel', $data);
            $this->load->view('admin/template/footer');
        } else {
            $config = [
                'upload_path'          => './uploads/',
                'allowed_types'        => 'gif|jpg|png',
                'max_size'             => 3000
            ];
            $this->load->library('upload', $config);
            if ($this->upload->do_upload('featured_img')) {
                $featured_img = $this->upload->data('file_name');
                $data = [
                    'judul' => $this->input->post('judul'),
                    'url' => $this->input->post('url'),
                    'kategori' => $this->input->post('kategori'),
                    'featured_img' => $featured_img,
                    'date_created' => '2020',
                    'author' => $this->session->userdata('username')
                ];
                if ($this->db->insert('tb_artikel', $data)) {
                    $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
                                                    Berhasil menambah artikel!!
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>');

                    redirect('admin/artikel');
                }
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    public function hapus($id)
    {
        if ($this->db->delete('tb_artikel', ['id' => $id])) {
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show">
                                                    Artikel dihapus
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    </div>');
            redirect('admin/artikel');
        }
    }
}
