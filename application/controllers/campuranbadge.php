<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranBadge extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campuranbadge';
		$this->load->view('layout/main', $data);
	}

}
?>