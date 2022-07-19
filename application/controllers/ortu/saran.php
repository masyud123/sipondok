<?php

class saran extends CI_Controller{
    public function index()
    {
        $this->load->view('templates_ortu/header');
        $this->load->view('templates_ortu/sidebar');
        $this->load->view('ortu/saran');
        $this->load->view('templates_ortu/footer');
    }

    public function tambah_saran(){
		$saran		= $this->input->post('saran');
	
		$data = array(
			'saran' 		=> $saran,
		);
        // // echo "<pre>";
		// print_r($data);
		// exit;
        
		$this->db->insert('saran', $data);
		$this->session->set_flashdata('');
		redirect('ortu/santri');
        }
}