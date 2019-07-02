<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintekdistribusipengawas';
		$this->load->view('layout/main', $data);
	}

}
?>