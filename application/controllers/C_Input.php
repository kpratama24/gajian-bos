<?php
class C_Input extends CI_Controller{
	function index(){
		if($this->session->userdata('logged_in')){
			$this->load->view('V_Input');
		}
		else{
			redirect('/');
		}
	}
	function inputGaji(){
		if($this->session->userdata('logged_in')){
			$id = $this->session->userdata('username');
			$hari = $this->input->post('hari');
			$tanggal = $this->input->post('tanggal');
			$jamMasuk = $this->input->post('jam_masuk');
			$jamKeluar = $this->input->post('jam_pulang');
			$totalJam = $this->input->post('total_jam');
			$istirahat = $this->input->post('istirahat');
			$id_hash = $this->randomHash();
			$date_timestamp = strtotime($this->input->post('tanggal'));
			$day = date("d", $date_timestamp);
			$month = date("m", $date_timestamp);
			if($day >=1 && $day <=15){
				$month = $month-1;
			}
			$year = date("Y", $date_timestamp);
			$periode = $month;
			$tahun = $year;
			$waktuReal = $totalJam - $istirahat;
			if($this->session->userdata('kategori') == 1){
				$harga = 9000;
			}
			else if($this->session->userdata('kategori') == 2){
				$harga = 7000;
			}
			$totalBayar = $waktuReal * $harga;
			
			$this->load->model('daftarLaporan');
			$succed = $this->daftarLaporan->simpanGaji($id, $id_hash, $hari, $tanggal, $jamMasuk, $jamKeluar, $totalJam, $istirahat, $waktuReal, $totalBayar, $periode, $tahun);
			if($succed){
				$this->session->set_flashdata('error_input', "Input Gaji Anda tanggal $tanggal berhasil disimpan.");
				redirect('/input');
			}
			else{
				$this->session->set_flashdata('error_input', 'Input Gaji Gagal Disimpan.');
				redirect('/input');
			}
		}
		else{
			redirect('/');
		}
	}
	function randomHash(){
		$characters = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMOPQRSTUVWXYZ';
		$string = '';
 		$max = strlen($characters) - 1;
 		for ($i = 0; $i < 20; $i++) {
      		$string .= $characters[mt_rand(0, $max)];
 		}
 		return $string;
	}
}
?>