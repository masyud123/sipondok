<?php

class kelas extends CI_Controller{

    public function index()
    {
       $data['santri'] = $this->model_santri->tampil_data()->result();
       $this->load->view('templates_pembina/header');
       $this->load->view('templates_pembina/sidebar');
       $this->load->view('pembina/kelas', $data);
       $this->load->view('templates_pembina/footer');
    }
    
}