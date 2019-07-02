<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TabelSaintekDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tabelsaintekdistribusipengawas';
		$this->load->view('layout/main', $data);
	}

}
?>