<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahDistribusiPengawasUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahdistribusipengawasujian';
		$this->load->view('layout/main', $data);
	}

}
?>