<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/distribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>