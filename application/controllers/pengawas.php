<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Pengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/pengawas';
		$this->load->view('layout/main', $data);
	}

}
?>