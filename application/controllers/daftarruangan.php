<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DaftarRuangan extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/daftarruangan';
		$this->load->view('layout/main', $data);
	}

}
?>