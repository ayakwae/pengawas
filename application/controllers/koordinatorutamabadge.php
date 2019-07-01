<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorUtamaBadge extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorutamabadge';
		$this->load->view('layout/main', $data);
	}

}
?>