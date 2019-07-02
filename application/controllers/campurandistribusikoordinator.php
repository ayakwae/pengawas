<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranDistribusiKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurandistribusikoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>