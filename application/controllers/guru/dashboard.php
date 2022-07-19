<?php

class Dashboard extends CI_Controller{

    public function index()
    {
       $this->load->view('templates_guru/header');
       $this->load->view('templates_guru/sidebar');
       $this->load->view('guru/dashboard');
       $this->load->view('templates_guru/footer');
    }
}