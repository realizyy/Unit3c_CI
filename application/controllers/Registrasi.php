<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Registrasi extends CI_Controller
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
		$data['content'] = 'contents/registrasi';
		$this->load->view('templates/login', $data);
	}

	public function registrasi()
	{
		$this->form_validation->set_rules('nama', 'Nama', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[pengguna.email]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
		$this->form_validation->set_rules('user', 'Role', 'required');

		if ($this->form_validation->run() == false) {
			$data['content'] = 'contents/registrasi';
			$this->load->view('templates/login', $data);
		} else {
			$data = [
				'nama' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
				'id_user' => $this->input->post('user')
			];
			$this->PenggunaModel->tambahPengguna($data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Berhasil daftar, silakan login!</div>');
			$content['content'] = 'contents/login';
			$this->load->view('templates/login', $content);
		}
	}
}
