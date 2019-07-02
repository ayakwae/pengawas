<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSoshumDistribusiPengawasUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsoshumdistribusipengawasujian';
		$this->load->view('layout/main', $data);
	}

}
?>