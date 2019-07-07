<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class TambahSoshumDaftarKoordinator extends CI_Controller
{
	public function index()
	{
		$data['border']='transparent';
		$data['page']='userview/tambahsoshumdaftarkoordinator';
		$this->load->view('layout/main', $data);
	}

}
?>