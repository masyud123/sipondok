<?php

class rapor_santri extends CI_Controller{
    public function index()
    {
        $this->load->view('templates_ortu/header');
        $this->load->view('templates_ortu/sidebar');
        $this->load->view('ortu/rapor');
        $this->load->view('templates_ortu/footer');
    }
}