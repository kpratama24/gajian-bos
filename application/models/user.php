<?php
class User extends CI_Model{
	public function __construct(){
    	parent::__construct();
	}
	function validateLogin($username){
		$this->db->where('USERNAME', $username);
		$result = $this->db->get('user');
		$item = "PASSWORD";
		if($result->num_rows() == 1){
			return $result->row(0)->$item;
		} 
		else {
			return false;
		}
	}
	function getUserItem($username, $item){
		$this->db->where('USERNAME', $username);
		$result = $this->db->get('user');
		if($result->num_rows() == 1){
			return $result->row(0)->$item;
		} 
		else {
			return false;
		}
	}
	function getDetailUser($username){
		$this->db->select('NAMA, NIK');
		$this->db->where('USERNAME', $username);
		$result = $this->db->get('user');
		return $result;
	}
	function addUserDB($username, $password, $nama, $nik, $role, $kategori){
		$data = array(
        	'USERNAME' => $username,
        	'PASSWORD' => $password,
        	'NAMA' => $nama,
        	'NIK' => $nik,
        	'ID_KATEGORI' => $kategori,
        	'ID_ROLE' => $role
		);

		if($this->db->insert('user', $data)){
			return true;
		}
		else{
			return false;
		}
	}
	function getUser(){
		$this->db->select('NAMA, NIK, USERNAME');
		$result = $this->db->get('user');
		return $result;
	}

	function getGaji($id){
		$this->db->select('*');
     	$this->db->from('daftarlaporan');
     	$this->db->join('user', 'daftarlaporan.ID_USER = user.USERNAME');
     	$this->db->where('daftarlaporan.ID', $id);
		$query = $this->db->get();
		return $query;
	}
	
}
?>