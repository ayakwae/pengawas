<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditSoshumDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editsoshumdaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>