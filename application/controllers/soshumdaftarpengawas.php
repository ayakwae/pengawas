<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumDaftarPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumdaftarpengawas';
		$this->load->view('layout/main', $data);
	}

}
?>