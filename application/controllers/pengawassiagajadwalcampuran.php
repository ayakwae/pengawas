<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PengawasSiagaJadwalCampuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawassiagajadwalcampuran';
		$this->load->view('layout/main', $data);
	}

}
?>