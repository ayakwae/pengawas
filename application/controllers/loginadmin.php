<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class LoginAdmin extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/loginadmin';
		$this->load->view('layout/main', $data);
	}

}
?>