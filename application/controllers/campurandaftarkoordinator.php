<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class CampuranDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/campurandaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>