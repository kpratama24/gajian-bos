<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Histori extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		if($this->session->userdata('logged_in') && $this->session->userdata('role') == 1){
			$this->load->model('daftarLaporan');
			$tahun = $this->input->get('tahun');
			$periode = $this->input->get('periode');
			$magang = $this->input->get('magang');
			$data['listlaporan'] = $this->daftarLaporan->getHistori($periode, $tahun, $magang)->result();
			$this->session->set_flashdata('info_filter_tahun', $tahun );
			$this->session->set_flashdata('info_filter_periode', $periode );
			$this->session->set_flashdata('info_filter_magang', $magang );
			$this->load->view('V_DetailHistori', $data);
		}
		else{
			redirect('/');
		}
	}

}
?>