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
}
?>