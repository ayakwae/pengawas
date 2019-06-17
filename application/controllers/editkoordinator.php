<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>