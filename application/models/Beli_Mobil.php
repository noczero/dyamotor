<?php 

class Beli_Mobil extends CI_Model{
	public function tambah($data)
	{
		$this->db->insert('beli_mobil', $data);
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function ubah($data, $id)
	{
		$this->db->where('id_beli', $id);
		$this->db->update('beli_mobil', $data);
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function hapus($id) 
	{
		$this->db->where('id_beli', $id);
		$this->db->delete('beli_mobil');
		return $this->db->affected_rows() > 0 ? true : false;
	}

	public function semua_mobil() {
		return $this->db->select('*')->from('beli_mobil')->get()->result_array();
	}

	public function insert_data_get_id($data){
		$this->db->insert('beli_mobil' , $data);

		return $this->db->insert_id();
	}

	public function get_last_id_beli($id_user, $id_mobil) {
		// ambil id beli di tabel pembelian yang terbaru
		$this->db->where('id_user', $id_user);
		$this->db->where('id_mobil', $id_mobil);
		return $this->db->get('beli_mobil')->result_array()[0];
	}

	public function get_konfirmasi_pembelian($id_beli){

		$query = "SELECT * FROM beli_mobil INNER JOIN mobil ON beli_mobil.id_mobil = mobil.id_mobil INNER JOIN user ON beli_mobil.id_user = user.id INNER JOIN user_data ON user_data.id_user = user.id WHERE id_beli= ?";

			$fetch = $this->db->query($query,array($id_beli));
			$result = $fetch->result_array()[0];

			//print_r($result);
			return $result;
	}

	public function get_data_belimobil($id_beli){
		$query = "SELECT * FROM beli_mobil INNER JOIN mobil ON beli_mobil.id_mobil = mobil.id_mobil WHERE id_beli = ?";
		$fetch = $this->db->query($query, array($id_beli));
		$result = $fetch->result_array()[0];

		return $result;
	}



}

 ?>