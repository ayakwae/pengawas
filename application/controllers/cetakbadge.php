<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Cetakbadge extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/cetak2';
		$data = array(
   		'record' => $this->db->get('daftar_badge_pengawas_saintek'));
	}
	public function cetak_id($NPU) {
     $data = array(
      'record'  => $this->db->query("SELECT * FROM daftar_badge_pengawas_saintek where NPU ='$NPU'"),
    );
    $this->load->view('userview/cetak2',$data);
    // $html = $this->output->get_output();
    // $this->load->library('dompdf_gen');
    // $this->dompdf->load_html($html);
    // $this->dompdf->render();
    // $sekarang=date("d:F:Y:h:m:s");
    // $this->dompdf->stream("pendaftaran".$sekarang.".pdf",array('Attachment'=>0));
 	}

}
?>