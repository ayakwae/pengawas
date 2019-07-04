<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorBadgeSaintek extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorbadgesaintek';
		$this->load->view('layout/main', $data);
	}

}
?>