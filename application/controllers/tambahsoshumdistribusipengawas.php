<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahSoshumDistribusiPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahsoshumdistribusipengawas';
		$this->load->view('layout/main', $data);
	}

}
?>