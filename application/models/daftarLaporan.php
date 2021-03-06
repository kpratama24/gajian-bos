<?php
class daftarLaporan extends CI_Model{
	function simpanGaji($id,$id_hash, $hari, $tanggal, $jamMasuk, $jamKeluar,$totalJam, $istirahat, $waktuReal, $totalBayar, $periode, $tahun){
		$data = array(
        	'ID_USER' => $id,
        	'ID_GAJI_HASH'=>$id_hash,
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
	function getDaftarLaporan($username, $periode, $tahun){
		$this->db->select('ID,ID_GAJI_HASH, HARI, TANGGAL, JAM_MASUK, JAM_PULANG, TOTAL_JAM, ISTIRAHAT, WAKTU_REAL, TOTAL_BAYAR');
		$this->db->where('ID_USER', $username);
		$this->db->where('PERIODE', $periode);
		$this->db->where('TAHUN', $tahun);
		$result = $this->db->get('daftarlaporan');
		return $result;
	}

	function getDaftarRappel($username, $periode, $tahun){
		$this->db->select('ID, HARI, TANGGAL, JAM_MASUK, JAM_PULANG, TOTAL_JAM, ISTIRAHAT, WAKTU_REAL, TOTAL_BAYAR');
		$this->db->where('ID_USER', $username);
		if($periode != '0'){
			$this->db->where('PERIODE', $periode);
		}
		if($tahun != '0'){
			$this->db->where('TAHUN', $tahun);
		}
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

	function getDetail($ID_GAJI_HASH){
		$this->db->select('HARI, TANGGAL, JAM_MASUK, JAM_PULANG, TOTAL_JAM, ISTIRAHAT');
		$this->db->where('ID_GAJI_HASH', $ID_GAJI_HASH);
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
	function remove($ID_GAJI_HASH){
		$this->db->where('ID_GAJI_HASH', $ID_GAJI_HASH);
 		$this->db->delete('daftarlaporan');
	}
}

?>