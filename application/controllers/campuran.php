<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Campuran extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campuran';
		$this->load->view('layout/main', $data);
	}

}
?>