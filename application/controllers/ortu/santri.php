<?php

class santri extends CI_Controller
{
    public function index()
    {
        $data['santri'] = $this->model_santri_ortu->tampil_data()->result();
        $this->load->view('templates_ortu/header');
        $this->load->view('templates_ortu/sidebar');
        $this->load->view('ortu/santri', $data);
        $this->load->view('templates_ortu/footer');
    }
}