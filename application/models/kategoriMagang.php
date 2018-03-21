<?php
class kategoriMagang extends CI_Model{
	function getListKategori(){
		$this->db->select('ID, KATEGORI');
		$result = $this->db->get('kategorimagang');
		return $result;
	}
}
?>