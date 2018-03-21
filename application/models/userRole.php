<?php
class userRole extends CI_Model{
	function getListRole(){
		$this->db->select('ID, NAME');
		$result = $this->db->get('user_role');
		return $result;
	}
}
?>