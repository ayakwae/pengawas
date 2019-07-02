<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurandistribusipengawas';
		$this->load->view('layout/main', $data);
	}

}
?>