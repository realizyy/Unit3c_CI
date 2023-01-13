<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mentor extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('MentorModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function dashboardMentorKelas()
    {
        $userdata = $this->session->all_userdata();
        $tabelKelas = $this->MentorModel->getAllKelas();
        if (count($userdata) > 1) {
            $data['nama'] = $userdata['nama'];
            $data['email'] = $userdata['email'];
            $data['role'] = $userdata['role'];
            $data['id_pengguna'] = $userdata['id_pengguna'];
            $data['semuaKelas'] = $tabelKelas;
            $data['content'] = 'contents/dashboardMentorKelas';
            $this->load->view('templates/dashboard', $data);
        } else {
            $data['role'] = null;
            $data['content'] = 'contents/dashboardMentorKelas';
            $this->load->view('templates/dashboard', $data);
        }
    }

    public function tambahKelas()
    {
        $this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('durasi', 'Durasi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == false) {
            redirect(base_url('Mentor/dashboardMentorKelas'));
        } else {
            $tambah = [
                'judul' => $this->input->post('judul'),
                'lokasi' => $this->input->post('lokasi'),
                'id_kategori' => $this->input->post('kategori'),
                'durasi' => $this->input->post('durasi'),
                'harga' => $this->input->post('harga'),
                'gambar' => $this->input->post('gambar')
            ];
            $this->MentorModel->tambahKelas($tambah);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menambahkan kelas!</div>');
            redirect(base_url('Mentor/dashboardMentorKelas'));
        }
    }

    public function ubahKelas($id)
    {
        $ubah['kelas'] = $this->MentorModel->getKelasById($id);

        $this->form_validation->set_rules('gambar', 'Gambar', 'trim|required');
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('lokasi', 'Lokasi', 'trim|required');
        $this->form_validation->set_rules('kategori', 'Kategori', 'required');
        $this->form_validation->set_rules('durasi', 'Durasi', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');

        if ($this->form_validation->run() == false) {
            redirect(base_url('Mentor/dashboardMentorKelas'));
            var_dump("gagal");
            die;
        } else {
            $ubah = [
                'judul' => $this->input->post('judul'),
                'lokasi' => $this->input->post('lokasi'),
                'id_kategori' => $this->input->post('kategori'),
                'durasi' => $this->input->post('durasi'),
                'harga' => $this->input->post('harga'),
                'gambar' => $this->input->post('gambar')
            ];
            $this->MentorModel->ubahKelas($ubah, $id);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mengubah kelas!</div>');
            redirect(base_url('Mentor/dashboardMentorKelas'));
        }
    }

    public function hapusKelas($id)
    {
        $this->MentorModel->hapusKelas($id);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil menghapus kelas!</div>');
        redirect(base_url('Mentor/dashboardMentorKelas'));
    }
}
