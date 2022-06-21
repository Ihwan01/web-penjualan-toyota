<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function login()
    {
        if (!$this->session->userdata('username')) {
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            if ($this->form_validation->run() == FALSE) {
                $this->load->view('admin/login');
            } else {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $user = $this->db->get_where('user', ['username' => $username])->row_array();
                if ($user) {
                    if (password_verify($password, $user['password'])) {
                        $this->session->set_userdata('username', $username);
                        redirect('admin/dashboard');
                    } else {
                        $this->session->set_flashdata('message', '<div class="alert alert-danger">Password salah!!</div>');
                        redirect('admin/auth/login');
                    }
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger">Username tidak terdaftar!!</div>');
                    redirect('admin/auth/login');
                }
            }
        } else {
            redirect('admin/dashboard');
        }
    }
}
