<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengguna extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PenggunaModel');
		$this->load->library('form_validation');
		$this->load->library('session');
	}

	public function index()
	{
		$userdata = $this->session->all_userdata();
		if (count($userdata) > 2) {
			$data['nama'] = $userdata['nama'];
			$data['email'] = $userdata['email'];
			$data['role'] = $userdata['role'];
			$this->load->view('templates/header', $data);
			$this->load->view('contents/home');
			$this->load->view('templates/footer');
		} else {
			$data['role'] = null;
			$this->load->view('templates/header', $data);
			$this->load->view('contents/home');
			$this->load->view('templates/footer');
		}
	}

	public function kelas()
	{
		$userdata = $this->session->all_userdata();
		$kelasTersedia = $this->PenggunaModel->getAllKelas();
		if (count($userdata) > 2) {
			$data['nama'] = $userdata['nama'];
			$data['email'] = $userdata['email'];
			$data['role'] = $userdata['role'];
			$data['id_pengguna'] = $userdata['id_pengguna'];
			$data['semuaKelas'] = $kelasTersedia;
			$this->load->view('templates/header', $data);
			$this->load->view('contents/kelasTersedia');
			$this->load->view('templates/footer');
		} else {
			$data['role'] = null;
			$data['semuaKelas'] = $kelasTersedia;
			$this->load->view('templates/header', $data);
			$this->load->view('contents/kelasTersedia');
			$this->load->view('templates/footer');
		}
	}

	public function kategori()
	{
		$userdata = $this->session->all_userdata();
		if (count($userdata) > 2) {
			$data['nama'] = $userdata['nama'];
			$data['email'] = $userdata['email'];
			$data['role'] = $userdata['role'];
			$this->load->view('templates/header', $data);
			$this->load->view('contents/kategori');
			$this->load->view('templates/footer');
		} else {
			$data['role'] = null;
			$this->load->view('templates/header', $data);
			$this->load->view('contents/kategori');
			$this->load->view('templates/footer');
		}
	}
}
