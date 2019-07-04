<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PengawasSiagaJadwalSoshum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawassiagajadwalsoshum';
		$this->load->view('layout/main', $data);
	}

}
?>