<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SaintekDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/saintekdaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>