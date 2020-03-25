<?php
 
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Browse_tarif extends CI_Controller {
    
        public function index()
        {
            $this->load->view('template/header');
            $this->load->view('v_tarif');
            $this->load->view('template/footer');
        }
    
    }
    
    /* End of file Browse_tarif.php */
    
?>