<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekTabelKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintektabelkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>