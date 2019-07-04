<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PengawasSiagaJadwalSaintek extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawassiagajadwalsaintek';
		$this->load->view('layout/main', $data);
	}

}
?>