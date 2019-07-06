<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditCampuranDistribusiKooridnatorUtama extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editcampurandistribusikooridnatorutama';
		$this->load->view('layout/main', $data);
	}

}
?>