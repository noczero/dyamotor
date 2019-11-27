<?php
class Mobil_model extends CI_Model
{
	public function tambah($data)
	{
		$this->db->insert('mobil', $data);
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function ubah($data, $id)
	{
		$this->db->where('id_mobil', $id);
		$this->db->update('mobil', $data);
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function hapus($id) 
	{
		$this->db->where('id_mobil', $id);
		$this->db->delete('mobil');
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function semua_mobil() {
		return $this->db->select('*')->from('mobil')->get()->result_array();
	}

	public function satu_mobil($id) {
		return $this->db->select('*')->from('mobil')->where('id_mobil', $id)->get()->result_array()[0];
	}

}
