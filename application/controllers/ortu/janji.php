<?php

class janji extends CI_Controller{
    public function index(){
        $data['pembina'] = $this->model_janji->tampil_data()->result();
        $this->load->view('templates_ortu/header');
        $this->load->view('templates_ortu/sidebar');
        $this->load->view('ortu/janji_temu',$data);
        $this->load->view('templates_ortu/footer');
    }

    private function send_wa($phone, $message){
        $curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'http://nusagateway.com/api/send-message.php',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS => array('token' => 'Masukkan Token WA disini','phone' => $phone,'message' => $message),
));

$response = curl_exec($curl);

curl_close($curl);
$content = json_decode($response);
        $status = $content->result;
        if($status == 'true'){
			return true;
		}else{
			return false;
		
        }
    }
    public function kirim_janji(){
        $no_hp = $this->input->post('no_hp');
        $message = 'ini test ortu';
        $this->send_wa($no_hp, $message);
       
    }
}