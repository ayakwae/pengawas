<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahSoshumDaftarPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahsoshumdaftarpengawas';
		$this->load->view('layout/main', $data);
	}

}
?>