<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class KoordinatorUtamaBadgeCampuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/koordinatorutamabadgecampuran';
		$this->load->view('layout/main', $data);
	}

}
?>