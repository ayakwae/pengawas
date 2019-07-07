<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahCampuranDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahcampurandaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>