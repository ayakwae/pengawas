<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Honor extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/honor';
		$this->load->view('layout/main', $data);
	}

}
?>