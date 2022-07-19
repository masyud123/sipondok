<?php

class Data_indikator extends CI_Controller{

    public function index()
    {
       $data['mapel'] = $this->model_mapel->tampil_data()->result();
       $this->load->view('templates_admin/header');
       $this->load->view('templates_admin/sidebar');
       $this->load->view('admin/indikator_rapor', $data);
       $this->load->view('templates_admin/footer');
    }
    
    public function detail_indikator($id_kelas)
	{
		
		$data['mapel'] = $this->model_detail_indikator->tampil_data()->result();
		$data['kelas'] = $this->model_detail_indikator->ambil_id_kelas($id_kelas);
		
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('admin/detail_indikator', $data);
		$this->load->view('templates_admin/footer');
	}
    public function tambah_detail_indikator(){
        $nama_mapel 	            = $this->input->post('nama_mapel');
        $indikator_nilai	        = $this->input->post('indikator_nilai');
        

        $data = array(
           'nama_mapel' => $nama_mapel,
           'indikator_nilai'  => $indikator_nilai,
           
        );
        
    // echo "<pre>";
		// print_r($data);
		// exit;
  
      $where = array(
      );
        
    $this->db->insert('mapel', $data);
		$this->session->set_flashdata('popup_user', '<div class="alert alert-success alert-dismissible fade show" style="width: 100%;" role="alert"><i class="fas fa-check-circle"></i>
			  Data berhasil ditambahkan!
	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		        <span aria-hidden="true">&times;</span>
	        </button>
	        </div>');
		redirect('admin/data_indikator');
    }
}