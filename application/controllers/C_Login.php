<?php
class C_Login extends CI_Controller{
	function index(){
		$this->load->view('V_login');
	}
	function login(){
		$this->load->model('user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$validated = $this->user->validateLogin($username, $password);
		if($validated){
			$userdata = array(
				'id' => $validated,
        		'username'  => $username,
        		'logged_in' => TRUE
			);

			$this->session->set_userdata($userdata);
			redirect('/home');
		}
		else{
			$this->session->set_flashdata('error_login', 'Invalid Username or Password');
			redirect('/');
		}
	}
	function logout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('logged_in');
		redirect('/');
	}
}
?>