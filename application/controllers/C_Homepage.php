<?php
class C_Homepage extends CI_Controller{
	function index(){
		if($this->session->userdata('logged_in')){
			$id = $this->session->userdata('id');
			$this->load->model('user');
			$data['profile'] = $this->user->getDetailUser($id)->result();
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
}
?>