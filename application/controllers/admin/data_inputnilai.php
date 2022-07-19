<?php

class Data_inputnilai extends CI_Controller{
    public function index()
    {
        // $data['mapel'] = $this->model_inputnilai->tampil_data()->result();
        // $data['santri'] = $this->model_santri->tampil_data()->result();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/input_nilai');
       $this->load->view('templates_admin/footer');
    }
}
?>