<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cetak8 extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/cetak';
		$data = array(
   		'record' => $this->db->get('daftar_undangan_koordinator_utama_soshum'));
	}
	public function cetak_id($NPU) {
     $data = array(
      'record'  => $this->db->query("SELECT * FROM daftar_undangan_koordinator_utama_soshum where NPU ='$NPU'"),
    );
    $this->load->view('userview/cetak',$data);
    $html = $this->output->get_output();
    $this->load->library('dompdf_gen');
    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $sekarang=date("d:F:Y:h:m:s");
    $this->dompdf->stream("pendaftaran".$sekarang.".pdf",array('Attachment'=>0));
 	}

}
?>