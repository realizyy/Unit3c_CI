<?php

class PenggunaModel extends CI_model
{

	public function getAllKelas()
	{
		return $this->db->get('kelas')->result_array();
	}

	public function getKategoriKelas($id)
	{
		$this->db->where('id_kategori', $id);
		return $this->db->get('kategori')->row_array();
	}

	public function tambahPengguna($data)
	{
		return $this->db->insert('pengguna', $data);
	}

	public function getPenggunaById($id)
	{
		$this->db->where('id_pengguna', $id);
		return $this->db->get('pengguna')->row_array();
	}
}
