<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesertaModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index()
    {
        $data['content'] = 'contents/login';
        $this->load->view('templates/login', $data);
    }

    public function cekPengguna()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == false) {
            $data['content'] = 'contents/login';
            // $this->PenggunaModel->getPenggunaById();
            $this->load->view('templates/login', $data);
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $user = $this->db->get_where('pengguna', ['email' => $email])->row_array();

        if ($user != null) {
            if (password_verify($password, $user['password'])) {
                $data['nama'] = $user['nama'];
                $data['email'] = $user['email'];
                $data['role'] = $user['id_user'];
                $data['id_pengguna'] = $user['id_pengguna'];
                if ($data['role'] == "1") {
                    $this->session->set_userdata($data);
                    redirect(base_url('Peserta/dashboardPeserta'));
                } else if ($data['role'] == "2") {
                    $this->session->set_userdata($data);
                    redirect(base_url('Mentor/dashboardMentorKelas'));
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
                redirect(base_url('Login'));
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email tidak terdaftar!</div>');
            redirect(base_url('Login'));
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('nama');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('role');
        $this->session->unset_userdata('id_pengguna');
        // session_destroy();
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil logout!</div>');
        redirect(base_url('Login'));
    }
}
