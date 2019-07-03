<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelCampuranDistribusiPengawasSiagaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelcampurandistribusipengawassiagaujian';
		$this->load->view('layout/main', $data);
	}

}
?>