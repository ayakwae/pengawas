<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahSoshumDistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahsoshumdistribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>