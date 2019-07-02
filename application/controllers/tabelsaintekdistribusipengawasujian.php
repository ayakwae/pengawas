<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSaintekDistribusiPengawasUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsaintekdistribusipengawasujian';
		$this->load->view('layout/main', $data);
	}

}
?>