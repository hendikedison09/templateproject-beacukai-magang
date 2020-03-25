<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {

    public function profil()
    {
        $this->load->view('template/header');
        $this->load->view('v_profil');
        $this->load->view('template/footer');
    }

    public function organisasi()
    {
        $this->load->view('template/header');
        $this->load->view('v_organisasi');
        $this->load->view('template/footer');
    }

    public function nilai_kemenkeu()
    {
        $this->load->view('template/header');
        $this->load->view('v_nilai-kemenkeu');
        $this->load->view('template/footer');
    }

    public function tugas_fungsi_djbc()
    {
        $this->load->view('template/header');
        $this->load->view('v_tugas-fungsi-djbc');
        $this->load->view('template/footer');
    }
    public function visi_misi_motto()
    {
        $this->load->view('template/header');
        $this->load->view('v_visi-misi-motto');
        $this->load->view('template/footer');
    }
    public function janji_layanan()
    {
        $this->load->view('template/header');
        $this->load->view('v_janji-layanan');
        $this->load->view('template/footer');
    }
    public function budaya_kerja()
    {
        $this->load->view('template/header');
        $this->load->view('v_budaya-kerja');
        $this->load->view('template/footer');
    }
    public function wilayah_kerja()
    {
        $this->load->view('template/header');
        $this->load->view('v_wilayah-kerja');
        $this->load->view('template/footer');
    }
    public function peta()
    {
        $this->load->view('template/header');
        $this->load->view('v_peta');
        $this->load->view('template/footer');
    }
    public function logo()
    {
        $this->load->view('template/header');
        $this->load->view('v_logo');
        $this->load->view('template/footer');
    }
    public function target_penerimaan()
    {
        $this->load->view('template/header');
        $this->load->view('v_target-penerimaan');
        $this->load->view('template/footer');
    }
}

/* End of file About.php */

?>