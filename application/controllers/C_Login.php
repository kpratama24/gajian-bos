<?php
class C_Login extends CI_Controller{
	function index(){
		$this->load->view('V_login');
	}
	function login(){
		redirect('/home');
	}
}
?>