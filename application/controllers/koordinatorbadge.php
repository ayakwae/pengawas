<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorBadge extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorbadge';
		$this->load->view('layout/main', $data);
	}

}
?>