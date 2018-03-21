<?php
class C_DaftarGaji extends CI_Controller{
	function index(){
		if($this->session->userdata('logged_in')){
			$this->load->model('daftarLaporan');
			$this->load->model('user');
			$this->load->model('kategoriGolongan');
			$username = $this->session->userdata('username');
			$kategori = $this->session->userdata('kategori');
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
}
?>