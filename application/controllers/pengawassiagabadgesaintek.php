<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PengawasSiagaBadgeSaintek extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawassiagabadgesaintek';
		$this->load->model('Adminmodel');
		$data['result'] = $this->Adminmodel->ambil70();
		$this->load->view('layout/main', $data);
	}

}
?>