<?php 

/**
  * 
  */
 class Kredit extends CI_Model
 {
 	
 	public function insert_kredit_get_id($data){
 		$this->db->insert('kredit', $data);
		return $this->db->insert_id();
 	}

 	public function get_one($id_kredit){
 		$this->db->where('id_kredit' , $id_kredit);
 		return $this->db->get('kredit')->result_array()[0];
 	}

 	public function get_harga_mobil($id_kredit){
 		$query="SELECT harga FROM beli_mobil INNER JOIN kredit ON beli_mobil.id_beli=kredit.id_beli INNER JOIN mobil ON beli_mobil.id_mobil=mobil.id_mobil WHERE id_kredit = ?";


		$fetch = $this->db->query($query,array($id_kredit));
		$result = $fetch->result_array()[0];

		//print_r($result);
		return $result;
 	}

 	public function get_id_mobil($id_kredit){
 		$query="SELECT id_mobil FROM beli_mobil INNER JOIN kredit ON beli_mobil.id_beli=kredit.id_beli WHERE id_kredit = ?";


		$fetch = $this->db->query($query,array($id_kredit));
		$result = $fetch->result_array()[0];

		//print_r($result);
		return $result;
 	}

 	public function apply($data,$id_kredit){
 		$this->db->where('id_kredit', $id_kredit);
 		$this->db->update('kredit', $data);
		return $this->db->affected_rows() > 0 ? true : false;
 	}


 } 


 ?>