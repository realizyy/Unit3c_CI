<?php

class PesertaModel extends CI_model
{

	public function getAllKelas()
	{
		return $this->db->get('kelas')->result_array();
	}

	public function tambahPengguna($data)
	{
		return $this->db->insert('pengguna', $data);
	}

	public function mendaftarKursus($data)
	{
		return $this->db->insert('transaksi', $data);
	}

	public function getKelasByIdInTransaksi($id)
	{
		$this->db->where('id_transaksi', $id);
		return $this->db->get('transaksi')->row_array();
	}

	public function menyelesaikanKursus($id, $data)
	{
		$this->db->where('id_transaksi', $id);
		return $this->db->update('transaksi', $data);
	}

	public function getPenggunaById($id)
	{
		$this->db->where('id_pengguna', $id);
		return $this->db->get('pengguna')->row_array();
	}

	public function getJumlahKelasDipelajariByIdTransaksi($id)
	{
		$this->db->select('transaksi.id_kelas')
			->from('transaksi')
			->join('pengguna', 'pengguna.id_pengguna = transaksi.id_pengguna')
			->join('kelas', 'kelas.id_kelas = transaksi.id_kelas')
			->join('status', 'status.id_status = transaksi.id_status')
			->where('transaksi.id_pengguna', $id)->where('status.status', 'dipelajari');
		return $this->db->get()->result_array();
	}

	public function getJumlahKelasSelesaiByIdTransaksi($id)
	{
		$this->db->select('transaksi.id_kelas')
			->from('transaksi')
			->join('pengguna', 'pengguna.id_pengguna = transaksi.id_pengguna')
			->join('kelas', 'kelas.id_kelas = transaksi.id_kelas')
			->join('status', 'status.id_status = transaksi.id_status')
			->where('transaksi.id_pengguna', $id)->where('status.status', 'selesai');
		return $this->db->get()->result_array();
	}

	public function getKelasDipelajariByIdTransaksi($id)
	{
		$this->db->select('*')
			->from('kelas')
			->join('transaksi', 'transaksi.id_kelas = kelas.id_kelas')
			->join('pengguna', 'pengguna.id_pengguna = transaksi.id_pengguna')
			->join('status', 'status.id_status = transaksi.id_status')
			->where('transaksi.id_pengguna', $id)->where('status.status', 'dipelajari');
		return $this->db->get()->result_array();
	}

	public function getKelasSelesaiByIdTransaksi($id)
	{
		$this->db->select('*')
			->from('kelas')
			->join('transaksi', 'transaksi.id_kelas = kelas.id_kelas')
			->join('pengguna', 'pengguna.id_pengguna = transaksi.id_pengguna')
			->join('status', 'status.id_status = transaksi.id_status')
			->where('transaksi.id_pengguna', $id)->where('status.status', 'selesai');
		return $this->db->get()->result_array();
	}
}
