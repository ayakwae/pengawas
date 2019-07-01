<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekHonor extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintekhonor';
		$this->load->view('layout/main', $data);
	}

}
?>