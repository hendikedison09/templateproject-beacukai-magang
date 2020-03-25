<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Link extends CI_Controller {

	public function djbc()
	{
		$this->load->view('template/header');
		$this->load->view('v_djbc');
		$this->load->view('template/footer');
	}
	public function kemenkeu()
	{
		$this->load->view('template/header');
		$this->load->view('v_kemenkeu');
		$this->load->view('template/footer');
	}
	public function asean_customs()
	{
		$this->load->view('template/header');
		$this->load->view('v_asean_customs');
		$this->load->view('template/footer');
	}
	public function instansi_terkait()
	{
		$this->load->view('template/header');
		$this->load->view('v_instansi_terkait');
		$this->load->view('template/footer');
	}
	public function mitra_kerja()
	{
		$this->load->view('template/header');
		$this->load->view('v_mitra_kerja');
		$this->load->view('template/footer');
	}


}

/* End of file Link.php */
/* Location: ./application/controllers/Link.php */