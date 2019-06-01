<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DaftarPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/daftarpengawas';
		$this->load->view('layout/main', $data);
	}

}
?>