<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumJadwal extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumjadwal';
		$this->load->view('layout/main', $data);
	}

}
?>