<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumdaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>