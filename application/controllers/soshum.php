<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Soshum extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshum';
		$this->load->view('layout/main', $data);
	}

}
?>