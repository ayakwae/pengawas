<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumDistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumdistribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>