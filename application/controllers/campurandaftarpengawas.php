<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranDaftarPengawas extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurandaftarpengawas';
		$this->load->view('layout/main', $data);
	}

}
?>