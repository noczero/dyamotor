<?php 

/**
 * 
 */
class Rekening extends CI_Model
{
	
	public function get_rekening($nama_bank){
		$this->db->where('nama_bank' , $nama_bank);
		return $this->db->get('rekening')->result_array()[0];
	}


}

 ?>