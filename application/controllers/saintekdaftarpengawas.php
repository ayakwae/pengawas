<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekDaftarPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintekdaftarpengawas';
		$this->load->view('layout/main', $data);
	}

}
?>