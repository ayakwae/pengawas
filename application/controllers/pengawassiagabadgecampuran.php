<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class PengawasSiagaBadgeCampuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawassiagabadgecampuran';
		$this->load->view('layout/main', $data);
	}

}
?>