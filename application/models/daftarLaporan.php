<?php
class daftarLaporan extends CI_Model{
	function simpanGaji($id, $hari, $tanggal, $jamMasuk, $jamKeluar,$totalJam, $istirahat, $waktuReal, $totalBayar){
		$data = array(
        	'ID_USER' => $id,
        	'HARI' => $hari,
        	'TANGGAL' => $tanggal,
        	'JAM_MASUK' => $jamMasuk,
        	'JAM_PULANG' => $jamKeluar,
        	'TOTAL_JAM' => $totalJam,
        	'ISTIRAHAT' => $istirahat,
        	'WAKTU_REAL' => $waktuReal,
        	'TOTAL_BAYAR' => $totalBayar
		);

		if($this->db->insert('daftarlaporan', $data)){
			return true;
		}
		else{
			return false;
		}
	}
	function getDaftarLaporan($username){
		$this->db->select('HARI, TANGGAL, JAM_MASUK, JAM_PULANG, TOTAL_JAM, ISTIRAHAT, WAKTU_REAL, TOTAL_BAYAR');
		$this->db->where('ID_USER', $username);
		$result = $this->db->get('daftarlaporan');
		return $result;
	}
}

?>