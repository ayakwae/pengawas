<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekDistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintekdistribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>