<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesertaModel');
        $this->load->model('MentorModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    // public function index()
    // {
    //     $userdata = $this->session->all_userdata();
    //     $jumlahKelasDipelajari = $this->PenggunaModel->getJumlahKelasDipelajariByIdTransaksi($userdata['id_pengguna']);
    //     $jumlahKelasSelesai = $this->PenggunaModel->getJumlahKelasSelesaiByIdTransaksi($userdata['id_pengguna']);
    //     if (count($userdata) > 1) {
    //         $data['nama'] = $userdata['nama'];
    //         $data['email'] = $userdata['email'];
    //         $data['role'] = $userdata['role'];
    //         $data['id_pengguna'] = $userdata['id_pengguna'];
    //         $data['countProg'] = count($jumlahKelasDipelajari);
    //         $data['countDone'] = count($jumlahKelasSelesai);
    //         // $data['kelasDiambil'] = $transaksi['id_kelas'];
    //         $data['content'] = 'contents/dashboardHome';
    //         $this->load->view('templates/dashboard', $data);
    //     } else {
    //         $data['role'] = null;
    //         $data['content'] = 'contents/dashboardHome';
    //         $this->load->view('templates/dashboard', $data);
    //     }
    // }

    // public function dashboardKelas()
    // {
    //     $userdata = $this->session->all_userdata();
    //     $judulKelasDipelajari = $this->PenggunaModel->getJudulKelasDipelajariByIdTransaksi($userdata['id_pengguna']);
    //     $judulKelasSelesai = $this->PenggunaModel->getJudulKelasSelesaiByIdTransaksi($userdata['id_pengguna']);
    //     // var_dump($judulKelasDipelajari);
    //     // die;
    //     if (count($userdata) > 1) {
    //         $data['nama'] = $userdata['nama'];
    //         $data['email'] = $userdata['email'];
    //         $data['role'] = $userdata['role'];
    //         $data['id_pengguna'] = $userdata['id_pengguna'];
    //         $data['judulProg'] = $judulKelasDipelajari;
    //         $data['judulDone'] = $judulKelasSelesai;
    //         // $data['kelasDiambil'] = $transaksi['id_kelas'];
    //         $data['content'] = 'contents/dashboardKelas';
    //         $this->load->view('templates/dashboard', $data);
    //     } else {
    //         $data['role'] = null;
    //         $data['content'] = 'contents/dashboardKelas';
    //         $this->load->view('templates/dashboard', $data);
    //     }
    //     // $userdata = $this->session->all_userdata();
    //     // if (count($userdata) > 1) {
    //     //     $data['nama'] = $userdata['nama'];
    //     //     $data['email'] = $userdata['email'];
    //     //     $data['role'] = $userdata['role'];
    //     //     $data['content'] = 'contents/dashboardKelas';
    //     //     $this->load->view('templates/dashboard', $data);
    //     // } else {
    //     //     $data['role'] = null;
    //     //     $data['content'] = 'contents/dashboardKelas';
    //     //     $this->load->view('templates/dashboard', $data);
    //     // }
    // }

    // public function dashboardMentorKelas()
    // {
    //     $userdata = $this->session->all_userdata();
    //     $tabelKelas = $this->MentorModel->getAllKelas();
    //     // var_dump($judulKelasDipelajari);
    //     // die;
    //     if (count($userdata) > 1) {
    //         $data['nama'] = $userdata['nama'];
    //         $data['email'] = $userdata['email'];
    //         $data['role'] = $userdata['role'];
    //         $data['id_pengguna'] = $userdata['id_pengguna'];
    //         $data['semuaKelas'] = $tabelKelas;
    //         $data['content'] = 'contents/dashboardMentorKelas';
    //         $this->load->view('templates/dashboard', $data);
    //     } else {
    //         $data['role'] = null;
    //         $data['content'] = 'contents/dashboardMentorKelas';
    //         $this->load->view('templates/dashboard', $data);
    //     }
    // }
}
