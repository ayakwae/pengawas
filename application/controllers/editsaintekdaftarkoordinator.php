<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditSaintekDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editsaintekdaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>