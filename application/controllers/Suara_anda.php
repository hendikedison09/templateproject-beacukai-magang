<?php

    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Suara_anda extends CI_Controller {
    
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('v_suara_anda');
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file Suara_anda.php */
    

?>
