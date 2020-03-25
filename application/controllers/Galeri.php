<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Galeri extends CI_Controller {

    public function foto()
    {
        $this->load->view('template/header');
        $this->load->view('v_foto');
        $this->load->view('template/footer');
    }

    public function video()
    {
        $this->load->view('template/header');
        $this->load->view('v_video');
        $this->load->view('template/footer');
    }
}
?>