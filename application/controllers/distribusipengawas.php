<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/distribusipengawas';
		$this->load->view('layout/main', $data);
	}

}
?>