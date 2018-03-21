<?php
class kategoriGolongan extends CI_Model{
	function getGaji($golongan){
		$this->db->select('HARGA, KATEGORI');
		$this->db->where('ID', $golongan);
		$result = $this->db->get('kategorimagang');
		return $result;
	}
}
?>