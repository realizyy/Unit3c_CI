<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Modul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('PesertaModel');
        $this->load->library('form_validation');
        $this->load->library('session');
    }

    public function index($id_transaksi)
    {
        $data['modul'] = 'What & Where of Lorem Ipsum?';
        $data['next'] = 'ujian/' . $id_transaksi;
        $data['back'] = '../Peserta/dashboardPesertaKelas';
        $data['id_transaksi'] = $id_transaksi;
        $this->load->view('templates/headerModul');
        $this->load->view('contents/modul', $data);
        $this->load->view('templates/footerModul', $data);
    }

    public function ujian($id_transaksi)
    {
        $data['modul'] = 'Test Akhir Lorem Ipsum';
        $data['next'] = 'soal1/' . $id_transaksi;
        $data['back'] = 'index/' . $id_transaksi;
        $data['id_transaksi'] = $id_transaksi;
        $this->load->view('templates/headerModul');
        $this->load->view('contents/ujian', $data);
        $this->load->view('templates/footerModul', $data);
    }

    public function soal1($id_transaksi)
    {
        $data['modul'] = 'Test Akhir Lorem Ipsum';
        $data['next'] = 'soal2/' . $id_transaksi;
        $data['back'] = 'ujian/' . $id_transaksi;
        $data['id_transaksi'] = $id_transaksi;
        $this->load->view('templates/headerModul');
        $this->load->view('contents/soal1', $data);
        $this->load->view('templates/footerModul', $data);
    }

    public function soal2($id_transaksi)
    {
        $data['modul'] = 'Test Akhir Lorem Ipsum';
        $data['next'] = 'hasilUjian/' . $id_transaksi;
        $data['back'] = 'soal1/' . $id_transaksi;
        $data['id_transaksi'] = $id_transaksi;
        $this->load->view('templates/headerModul');
        $this->load->view('contents/soal2', $data);
        $this->load->view('templates/footerModul', $data);
    }

    public function hasilUjian($id_transaksi)
    {
        $data['modul'] = 'Test Akhir Lorem Ipsum';
        $data['next'] = 'sertifikat/' . $id_transaksi;
        $data['back'] = 'ujian/' . $id_transaksi;
        $data['id_transaksi'] = $id_transaksi;
        $this->load->view('templates/headerModul');
        $this->load->view('contents/hasilUjian', $data);
        $this->load->view('templates/footerModul', $data);
    }

    public function sertifikat($id_transaksi)
    {
        $data['modul'] = 'Sertifikat';
        $data['next'] = '/' . $id_transaksi;
        $data['back'] = 'index/' . $id_transaksi;
        $data['id_transaksi'] = $id_transaksi;
        $this->load->view('templates/headerModul');
        $this->load->view('contents/sertifikat', $data);
        $this->load->view('templates/footerModul', $data);
    }
}
