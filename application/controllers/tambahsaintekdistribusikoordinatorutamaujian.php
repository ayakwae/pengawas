<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahSaintekDistribusiKoordinatorUtamaUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahsaintekdistribusikoordinatorutamaujian';
		$this->load->view('layout/main', $data);
	}

}
?>