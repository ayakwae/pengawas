<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumDistribusiPengawasUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumdistribusipengawasujian';
		$this->load->view('layout/main', $data);
	}

}
?>