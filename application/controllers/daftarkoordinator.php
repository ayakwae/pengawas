<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class DaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/daftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>