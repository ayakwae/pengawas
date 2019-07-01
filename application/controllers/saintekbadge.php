<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekBadge extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintekbadge';
		$this->load->view('layout/main', $data);
	}

}
?>