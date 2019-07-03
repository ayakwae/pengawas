<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranJadwal extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campuranjadwal';
		$this->load->view('layout/main', $data);
	}

}
?>