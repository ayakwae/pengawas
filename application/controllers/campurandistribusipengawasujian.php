<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranDistribusiPengawasUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurandistribusipengawasujian';
		$this->load->view('layout/main', $data);
	}

}
?>