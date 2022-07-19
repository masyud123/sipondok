<?php

class saran extends CI_Controller{

    public function index()
    {
       $this->load->view('templates_pembina/header');
       $this->load->view('templates_pembina/sidebar');
       $this->load->view('pembina/saran');
       $this->load->view('templates_pembina/footer');
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
		$this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible fade show" style="width: 90%;" role="alert"><i class="fas fa-check-circle"></i>
			  Data berhasil ditambahkan!
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	  </button>
	</div>');
		redirect('pembina/data_santri');
        }
}