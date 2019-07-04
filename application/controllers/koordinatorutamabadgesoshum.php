<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorUtamaBadgeSoshum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorutamabadgesoshum';
		$this->load->view('layout/main', $data);
	}

}
?>