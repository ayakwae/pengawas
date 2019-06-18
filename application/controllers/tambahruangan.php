<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahRuangan extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahruangan';
		$this->load->view('layout/main', $data);
	}

}
?>