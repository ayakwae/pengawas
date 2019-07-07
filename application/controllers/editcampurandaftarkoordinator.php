<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class EditCampuranDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/editcampurandaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>