<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahDistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahdistribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>