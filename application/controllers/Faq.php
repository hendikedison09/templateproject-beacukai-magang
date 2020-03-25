<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

    public function cukai()
    {
        $this->load->view('template/header');
        $this->load->view('v_cukai');
        $this->load->view('template/footer');
    }

    public function kepabeanan()
    {
        $this->load->view('template/header');
        $this->load->view('v_kepabeanan');
        $this->load->view('template/footer');
    }

    public function lain()
    {
        $this->load->view('template/header');
        $this->load->view('v_lain');
        $this->load->view('template/footer');
    }

}

/* End of file Faq.php */


?>