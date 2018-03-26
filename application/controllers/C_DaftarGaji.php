<?php
class C_DaftarGaji extends CI_Controller{
	function index(){
		if($this->session->userdata('logged_in')){
			$this->load->helper('date');
			$this->load->model('daftarLaporan');
			$this->load->model('user');
			$this->load->model('kategoriGolongan');
			$username = $this->session->userdata('username');
			$kategori = $this->session->userdata('kategori');
			$datestring = 'Year: %Y Month: %m Day: %d - %h:%i %a';
			$time = time();
			$data['date'] =  mdate($datestring, $time);
			$data['listlaporan'] = $this->daftarLaporan->getDaftarLaporan($username)->result();
			$data['profile'] = $this->user->getDetailUser($username)->result();
			$data['listmagang'] = $this->user->getUser()->result();
			$data['gaji'] = $this->kategoriGolongan->getGaji($kategori)->result();
			$this->load->view('V_LaporanGaji', $data);
		}
		else{
			redirect('/');
		}
	}
	function loadDetailLaporan($id_gaji){
		if($this->session->userdata('logged_in') && $this->session->userdata('role') == 1){
			$this->load->model('daftarLaporan');
			$data['info'] = $this->daftarLaporan->getDetail($id_gaji)->result();
			$this->load->view('V_DetailGaji', $data);
		}
		else{
			redirect('/home');
		}
	}
	function remove (){
		if($this->session->userdata('logged_in') && $this->session->userdata('role') == 1){
			$this->load->model('daftarLaporan');
			$id_gaji = $this->input->post('id_gaji');
			$this->daftarLaporan->remove($id_gaji);
			$this->session->set_flashdata('edit', "Input Gaji Anda telah berhasil dihapus.");
			redirect('/home');
		}
		else{
			redirect('/home');
		}
	}
	function edit($id_gaji){
		if($this->session->userdata('logged_in') && $this->session->userdata('role') == 1){
			$this->load->model('daftarLaporan');
			$id_gaji = $this->input->post('id_gaji');
			$hari = $this->input->post('hari');
			$tanggal = $this->input->post('tanggal');
			$jamMasuk = $this->input->post('jam_masuk');
			$jamKeluar = $this->input->post('jam_pulang');
			$totalJam = $this->input->post('total_jam');
			$istirahat = $this->input->post('istirahat');
			
		}
		else{
			redirect('/home');
		}
	}
}
?>