<?php
class C_Login extends CI_Controller{
	function index(){
		$this->load->view('V_login');
	}
	function login(){
		$this->load->model('user');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$validated = $this->user->validateLogin($username);

		if(password_verify($password, $validated)){
			$role = $this->user->getUserItem($username, "ID_ROLE");
			$kategori = $this->user->getUserItem($username, "ID_KATEGORI");
			$userdata = array(
        		'username'  => $username,
        		'logged_in' => TRUE,
        		'role' => $role,
        		'kategori' => $kategori
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
		$this->session->unset_userdata('role');
		$this->session->unset_userdata('kategori');
		redirect('/');
	}
}
?>