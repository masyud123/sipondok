<?php

class data_kelas extends CI_Controller
{
	// public function __construct(){
	// 	parent::__construct();
	// 	if($this->session->userdata('hak_akses') != 'guru'){
	// 		$this->session->set_flashdata('pesan_login','<div class="alert alert-danger alert-dismissible fade show" role="alert"><i class="fas fa-check-circle"></i>
	// 		        Anda belum login !
	//             <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	// 	            <span aria-hidden="true">&times;</span>
	//             </button>
	//             </div>');
	// 		redirect('login');
	// 	}
	// }

    public function index()
    {
    	
    	$data['mapel'] = $this->model_input_rapor->tampil_data()->result();
        $data['santri'] = $this->model_santri->tampil_data()->result();
        $this->load->view('templates_guru/header');
        $this->load->view('templates_guru/sidebar');
        $this->load->view('guru/kelas',$data);
        $this->load->view('templates_guru/footer');
     //    echo "<pre>";
   		// print_r($data);exit;
    }
	
    public function kelas_guru($id_kelas)
	{
		// $data['list_nominator'] = $this->model_nominator->list_nama_nominator();
		$data['kelas'] = $this->model_kelas_guru->ambil_id_kelas($id_kelas);
		$data['santri'] = $this->model_kelas_guru->ambil_id_kelas($id_kelas);
		$this->load->view('templates_admin/header');
		$this->load->view('templates_admin/sidebar');
		$this->load->view('guru/kelas', $data);
		$this->load->view('templates_admin/footer');
	}
}