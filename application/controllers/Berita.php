<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

    public function agenda_kegiatan()
    {
        $this->load->view('template/header');
        $this->load->view('v_agenda-kegiatan');
        $this->load->view('template/footer');
    }

    public function artikel()
    {
        $this->load->view('template/header');
        $this->load->view('v_artikel');
        $this->load->view('template/footer');
    }

    public function pengumuman_informasi()
    {
        $this->load->view('template/header');
        $this->load->view('v_pengumuman_informasi');
        $this->load->view('template/footer');
    }
}

/* End of file Berita.php */


?>