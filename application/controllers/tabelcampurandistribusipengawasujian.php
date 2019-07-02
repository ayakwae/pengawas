<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelCampuranDistribusiPengawasUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelcampurandistribusipengawasujian';
		$this->load->view('layout/main', $data);
	}

}
?>