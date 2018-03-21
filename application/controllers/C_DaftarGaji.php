<?php
class C_DaftarGaji extends CI_Controller{
	function index(){
		if($this->session->userdata('logged_in')){
			$this->load->view('V_LaporanGaji');
		}
		else{
			redirect('/');
		}
	}
}
?>