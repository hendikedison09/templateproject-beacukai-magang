<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {

        $this->load->view('template/header');
        $this->load->view('v_beranda');
        $this->load->view('template/footer');
        
    }
    

}

/* End of file Controllername.php */


?>