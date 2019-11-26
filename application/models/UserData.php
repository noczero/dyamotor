<?php 
class UserData extends CI_Model
{

	public function tambah($data)
	{
		$this->db->insert('user_data', $data);
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function ubah($data, $id)
	{
		$this->db->where('id_userdata', $id);
		$this->db->update('user_data', $data);
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function hapus($id) 
	{
		$this->db->where('id_userdata', $id);
		$this->db->delete('user_data');
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function semua_mobil() {
		return $this->db->select('*')->from('user_data')->get()->result_array();
	}

	public function get_user_data($id_user){
		$this->db->where('id_user', $id_user);
		return $this->db->get('user_data');
	}
}

 ?>