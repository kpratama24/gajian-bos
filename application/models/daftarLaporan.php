<?php
class daftarLaporan extends CI_Model{
	function simpanGaji($id, $hari, $tanggal, $jamMasuk, $jamKeluar,$totalJam, $istirahat, $waktuReal, $totalBayar, $periode, $tahun){
		$data = array(
        	'ID_USER' => $id,
        	'HARI' => $hari,
        	'TANGGAL' => $tanggal,
        	'JAM_MASUK' => $jamMasuk,
        	'JAM_PULANG' => $jamKeluar,
        	'TOTAL_JAM' => $totalJam,
        	'ISTIRAHAT' => $istirahat,
        	'WAKTU_REAL' => $waktuReal,
        	'TOTAL_BAYAR' => $totalBayar,
        	'PERIODE' => $periode,
        	'TAHUN' => $tahun
		);

		if($this->db->insert('daftarlaporan', $data)){
			return true;
		}
		else{
			return false;
		}
	}
	function getDaftarLaporan($username){
		$this->db->select('ID, HARI, TANGGAL, JAM_MASUK, JAM_PULANG, TOTAL_JAM, ISTIRAHAT, WAKTU_REAL, TOTAL_BAYAR');
		$this->db->where('ID_USER', $username);
		$this->db->where('PERIODE', '3');
		$this->db->where('TAHUN', '2018');
		$result = $this->db->get('daftarlaporan');
		return $result;
	}

	function getHistori($periode, $tahun, $magang){
		$this->db->select('ID_USER, HARI, TANGGAL, JAM_MASUK, JAM_PULANG, TOTAL_JAM, ISTIRAHAT, WAKTU_REAL, TOTAL_BAYAR, PERIODE, TAHUN');
		if($periode != 0){
			$this->db->where('PERIODE', $periode);
		}
		if($tahun != 0 ){
			$this->db->where('TAHUN', $tahun);
		}
		if($magang != '0'){
			$this->db->where('ID_USER', $magang);
		}
		$result = $this->db->get('daftarlaporan');
		return $result;
	}

	function getDetail($id){
		$this->db->select('HARI, TANGGAL, JAM_MASUK, JAM_PULANG, TOTAL_JAM, ISTIRAHAT');
		$this->db->where('ID', $id);
		$result = $this->db->get('daftarlaporan');
		return $result;
	}
	function edit($id, $hari, $tanggal, $jamMasuk, $jamKeluar,$totalJam, $istirahat, $waktuReal, $totalBayar, $periode, $tahun){
		$data = array(
        	'ID_USER' => $id,
        	'HARI' => $hari,
        	'TANGGAL' => $tanggal,
        	'JAM_MASUK' => $jamMasuk,
        	'JAM_PULANG' => $jamKeluar,
        	'TOTAL_JAM' => $totalJam,
        	'ISTIRAHAT' => $istirahat,
        	'WAKTU_REAL' => $waktuReal,
        	'TOTAL_BAYAR' => $totalBayar,
        	'PERIODE' => $periode,
        	'TAHUN' => $tahun
		);
		if($this->db->update('daftarlaporan', $data)){
			return true;
		}
		else{
			return false;
		}
	}
	function remove($id){
		$this->db->where('id', $id);
 		$this->db->delete('daftarlaporan');
	}
}

?>