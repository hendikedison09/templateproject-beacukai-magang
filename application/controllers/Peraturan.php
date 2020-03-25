<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Peraturan extends CI_Controller {
    
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('v_direktori_peraturan');
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file Suara_anda.php */
    

?>