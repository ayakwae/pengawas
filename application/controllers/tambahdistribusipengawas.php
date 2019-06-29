<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahdistribusipengawas';
		$this->load->view('layout/main', $data);
	}

}
?>