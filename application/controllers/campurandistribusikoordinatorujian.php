<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranDistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurandistribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>