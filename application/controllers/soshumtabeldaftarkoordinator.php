<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class SoshumTabelDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/soshumtabeldaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>