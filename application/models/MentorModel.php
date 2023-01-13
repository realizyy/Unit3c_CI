<?php

class MentorModel extends CI_model
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

    public function tambahKelas($data)
    {
        return $this->db->insert('kelas', $data);
    }

    public function hapusKelas($id)
    {
        $this->db->where('id_kelas', $id);
        return $this->db->delete('kelas');
    }

    public function getKelasById($id)
    {
        $this->db->where('id_kelas', $id);
        return $this->db->get('kelas')->row_array();
    }

    public function ubahKelas($data, $id)
    {
        $this->db->where('id_kelas', $id);
        return $this->db->update('kelas', $data);
    }

    public function getPenggunaById($id)
    {
        $this->db->where('id_pengguna', $id);
        return $this->db->get('pengguna')->row_array();
    }
}
