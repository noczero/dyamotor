<?php
class AuthModel extends CI_Model{

	public function login($username, $password) {
		$username = $this->db->escape($username);
		$password = $this->db->escape($password);

		$condition = "username = $username AND password = $password";
		$this->db->where($condition);
		
		return $this->db->get('user');
	}

	public function register($data) {
		// $data = $this->db->escape($data);

		return $this->db->insert('user', $data);
	}

	public function selectDataUser($data) {
		$this->db->where('username', $data);
		return $this->db->get('user');
		
	}
}
