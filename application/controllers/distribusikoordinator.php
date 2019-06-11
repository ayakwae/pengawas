<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DistribusiKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/distribusikoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>