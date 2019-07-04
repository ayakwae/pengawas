<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorBadgeCampuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorbadgecampuran';
		$this->load->view('layout/main', $data);
	}

}
?>