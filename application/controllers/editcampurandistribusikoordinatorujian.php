<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditCampuranDistribusiKoordinatorUjian extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editcampurandistribusikoordinatorujian';
		$this->load->view('layout/main', $data);
	}

}
?>