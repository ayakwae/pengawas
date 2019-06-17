<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>