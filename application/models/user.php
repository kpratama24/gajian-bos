<?php
class User extends CI_Model{
	public function __construct(){
    	parent::__construct();
	}
	function validateLogin($username, $password){
		$this->db->where('USERNAME', $username);
		$this->db->where('PASSWORD', $password);
		$result = $this->db->get('user');
		$item = "ID";
		if($result->num_rows() == 1){
			return $result->row(0)->$item;
		} 
		else {
			return false;
		}
	}
	function getDetailUser($id){
		$this->db->select('NAMA, NIK');
		$this->db->where('ID', $id);
		$result = $this->db->get('user');
		return $result;
	}
	function addUserDB($username, $password, $nama, $nik){
		$data = array(
        	'USERNAME' => $username,
        	'PASSWORD' => $password,
        	'NAMA' => $nama,
        	'NIK' => $nik
		);

		if($this->db->insert('user', $data)){
			return true;
		}
		else{
			return false;
		}
	}
	function getUser(){
		$this->db->select('NAMA, NIK');
		$result = $this->db->get('user');
		return $result;
	}
}
?>