<?php
class C_Add extends CI_Controller{
	function index(){
		if($this->session->userdata('logged_in')){
			$this->load->view('V_Add');
		}
		else{
			redirect('/');
		}
	}
	function addUser(){
		if($this->session->userdata('logged_in')){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$nik = $this->input->post('nik');
			if($username != "" && $password != "" && $nama !="" && $nik !=""){
				$this->load->model('user');
				$success = $this->user->addUserDB($username, $password, $nama, $nik);
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