<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peserta extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesertaModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function dashboardPeserta()
    {
        $userdata = $this->session->all_userdata();
        $jumlahKelasDipelajari = $this->PesertaModel->getJumlahKelasDipelajariByIdTransaksi($userdata['id_pengguna']);
        $jumlahKelasSelesai = $this->PesertaModel->getJumlahKelasSelesaiByIdTransaksi($userdata['id_pengguna']);
        if (count($userdata) > 1) {
            $data['nama'] = $userdata['nama'];
            $data['email'] = $userdata['email'];
            $data['role'] = $userdata['role'];
            $data['id_pengguna'] = $userdata['id_pengguna'];
            $data['countProg'] = count($jumlahKelasDipelajari);
            $data['countDone'] = count($jumlahKelasSelesai);
            $data['content'] = 'contents/dashboardHome';
            $this->load->view('templates/dashboard', $data);
        } else {
            $data['role'] = null;
            $data['content'] = 'contents/dashboardHome';
            $this->load->view('templates/dashboard', $data);
        }
    }

    public function dashboardPesertaKelas()
    {
        $userdata = $this->session->all_userdata();
        $kelasDipelajari = $this->PesertaModel->getKelasDipelajariByIdTransaksi($userdata['id_pengguna']);
        $kelasSelesai = $this->PesertaModel->getKelasSelesaiByIdTransaksi($userdata['id_pengguna']);
        if (count($userdata) > 1) {
            $data['nama'] = $userdata['nama'];
            $data['email'] = $userdata['email'];
            $data['role'] = $userdata['role'];
            $data['id_pengguna'] = $userdata['id_pengguna'];
            $data['kelasDipelajari'] = $kelasDipelajari;
            $data['kelasSelesai'] = $kelasSelesai;
            $data['content'] = 'contents/dashboardKelas';
            $this->load->view('templates/dashboard', $data);
        } else {
            $data['role'] = null;
            $data['content'] = 'contents/dashboardKelas';
            $this->load->view('templates/dashboard', $data);
        }
    }

    public function mendaftarKursus($id_kelas)
    {
        $userdata = $this->session->all_userdata();

        $mendaftar = [
            'id_pengguna' => $userdata['id_pengguna'],
            'id_kelas' => $id_kelas,
            'id_status' => 1
        ];
        $this->PesertaModel->mendaftarKursus($mendaftar);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil mendaftar kursus!</div>');
        redirect(base_url('Peserta/dashboardPesertaKelas'));
    }

    public function menyelesaikanKursus($id_transaksi)
    {
        $selesai['id_transaksi'] = $this->PesertaModel->getKelasByIdInTransaksi($id_transaksi);
        $selesai = [
            'id_status' => 2
        ];
        $this->PesertaModel->menyelesaikanKursus($id_transaksi, $selesai);
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Anda telah menyelesaikan kursus!</div>');
        redirect(base_url('Modul/sertifikat/' . $id_transaksi));
    }
}
