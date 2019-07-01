<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumBadge extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumbadge';
		$this->load->view('layout/main', $data);
	}

}
?>