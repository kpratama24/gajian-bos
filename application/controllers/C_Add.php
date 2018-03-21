<?php
class C_Add extends CI_Controller{
	function index(){
		if($this->session->userdata('logged_in')){
			$this->load->model('userRole');
			$this->load->model('kategoriMagang');
			$data['listrole'] = $this->userRole->getListRole()->result();
			$data['listkategori'] = $this->kategoriMagang->getListKategori()->result();
			$this->load->view('V_Add', $data);
		}
		else{
			redirect('/');
		}
	}
	function addUser(){
		if($this->session->userdata('logged_in')){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$password = password_hash($password, PASSWORD_BCRYPT);
			$nama = $this->input->post('nama');
			$nik = $this->input->post('nik');
			$role = $this->input->post('role');
			$kategori = $this->input->post('kategori');
			if($username != "" && $password != "" && $nama !="" && $nik !=""){
				$this->load->model('user');
				$success = $this->user->addUserDB($username, $password, $nama, $nik, $role, $kategori);
				if($success){
					$this->session->set_flashdata('error_add', "Berhasil menambahkan user $nama");
					redirect('/add');
				}
				else{
					$this->session->set_flashdata('error_add', "Gagal menambahkan user $nama");
					redirect('/add');
				}
			}
			else{
				$this->session->set_flashdata('error_add', "Ada Input yang belum diisi lengkap");
				redirect('/add');
			}
		}
		else{
			redirect('/');
		}
		
		
	}
}
?>