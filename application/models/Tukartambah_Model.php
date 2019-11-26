<?php
class Tukartambah_Model extends CI_Model
{
	public function tambah($data)
	{
		$this->db->insert('tukar_tambah', $data);
		$insert_id = $this->db->insert_id();
		if ($insert_id){
			return $insert_id;
		}
		return false;
	}

	public function ubah($data, $id)
	{
		$this->db->where('id_tukartambah', $id);
		$this->db->update('tukar_tambah', $data);
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function hapus($id)
	{
		$this->db->where('id_tukartambah', $id);
		$this->db->delete('tukar_tambah');
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function semua_tt() {
		return $this->db->select('*')->from('tukar_tambah')->get()->result_array();
	}

	public function satu_tt($id) {
		return $this->db->select('*')->from('tukar_tambah')->where('id_tukartambah', $id)->get()->result_array()[0];
	}
}
