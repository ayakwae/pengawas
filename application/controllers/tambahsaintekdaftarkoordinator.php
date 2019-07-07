<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahSaintekDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahsaintekdaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>