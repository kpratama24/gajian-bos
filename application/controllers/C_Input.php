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
			$id = $this->session->userdata('id');
			$hari = $this->input->post('hari');
			$tanggal = $this->input->post('tanggal');
			$jamMasuk = $this->input->post('jam_masuk');
			$jamKeluar = $this->input->post('jam_pulang');
			$totalJam = $this->input->post('total_jam');
			$istirahat = $this->input->post('istirahat');
			$waktuReal = $totalJam - $istirahat;
			$totalBayar = $waktuReal * 9000;
			
			$this->load->model('daftarLaporan');
			$succed = $this->daftarLaporan->simpanGaji($id, $hari, $tanggal, $jamMasuk, $jamKeluar, $totalJam, $istirahat, $waktuReal, $totalBayar);
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
}
?>