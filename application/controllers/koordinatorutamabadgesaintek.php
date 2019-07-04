<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorUtamaBadgeSaintek extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorutamabadgesaintek';
		$this->load->view('layout/main', $data);
	}

}
?>