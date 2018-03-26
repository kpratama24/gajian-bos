<?php
class C_Homepage extends CI_Controller{
	function index(){
		if($this->session->userdata('logged_in')){
			$username = $this->session->userdata('username');
			$this->load->model('user');
			$data['profile'] = $this->user->getDetailUser($username)->result();
			$this->load->view('V_Homepage', $data);
		}
		else{
			redirect('/');
		}
	}
	function getAllMagang(){
		if($this->session->userdata('logged_in')){
			$this->load->model('user');
			$data['listmagang'] = $this->user->getUser()->result();
			$this->load->view('V_ListMagang', $data);
		}
		else{
			redirect('/');
		}
		
	}
	function loadHistoriPage(){
		if($this->session->userdata('logged_in') && $this->session->userdata('role') == 1){
			$this->load->model('user');
			$data['listmagang'] = $this->user->getUser()->result();
			$this->load->view('V_Histori', $data);
		}
		else{
			redirect('/');
		}
	}
}
?>