<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranHonor extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campuranhonor';
		$this->load->view('layout/main', $data);
	}

}
?>