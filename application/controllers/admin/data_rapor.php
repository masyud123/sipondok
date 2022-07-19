<?php

use \Dompdf\Dompdf;

class Data_rapor extends CI_Controller
{

    public function index()
    {
        $data['rapor'] = $this->model_rapor->tampil_data()->result();
        // echo "<pre>";
        // print_r($data);
        // exit;
        $this->load->view('templates_admin/header');
        $this->load->view('templates_admin/sidebar');
        $this->load->view('admin/rapor', $data);
        $this->load->view('templates_admin/footer');
    }

    public function detail_rapor($id)
    {
        $rapor = $this->db->get_where('santri', array('id_santri' => $id))->row();

        $data = [
            'rapor' => $rapor,
            'mapel' => $this->model_rapor->getMapel($id),
            'kelas' => $this->db->get_where('kelas', array('id_kelas' => $rapor->id_kelas))->row(),
            'sum'   => $this->model_rapor->getSum($id),
            'avg'   => $this->model_rapor->getAvg($id),
        ];

        $this->load->library('pdf');
        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "Laporan.pdf";
        $this->pdf->load_view('admin/pdf', $data);







        // $this->load->view('templates_admin/header');
        // $this->load->view('templates_admin/sidebar');
        // $this->load->view('admin/detail_rapor', $data);
        // $this->load->view('templates_admin/footer');
    }

    public function pdf()
    {
        $this->load->library('dompdf_gen');
        $data['rapor'] = $this->model_rapor->tampil_data()->result();
        $this->load->view('print_rapor', $data);

        // setting paper
        $paper_size = 'A5';
        //orientasi paper potrait / landscape
        $orientation = "portrait";
        $html             = $this->output->get_output();
        $this->dompdf->set_paper($paper_size, $orientation);

        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("rapor_santri.pdf", array('Attachment' => 0));
    }
}