<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DistribusiPengawasUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/distribusipengawasujian';
		$this->load->view('layout/main', $data);
	}

}
?>